<?php

namespace App\modules\customers\core\controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\modules\customers\core\models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Helpers\TriggerHelper;

class CustomerController extends Controller {
    /*
     * Renders a list with the clients
     */

    public function actionList() {
        $customers = Customer::all();
        view()->addLocation(app_path() . '/modules/customers/core/views');
        return view('list', ['customers' => $customers]);
    }

    /*
     * Render's te create form view
     */

    public function actionNew() {
        view()->addLocation(app_path() . '/modules/customers/core/views');
        return view('new');
    }

    /*
     * Catches the post create request and executes it
     * 
     * @param {Request} $request - The request with the POST data
     */

    public function actionCreate(Request $request) {
        //catch all the data
        $data = $request->all();
        //create a empty object and fill it
        $customer = new Customer;
        foreach ($data as $key => $value) {
            if ($key != '_token')
                $customer->$key = $value;
        }
        //Fire trigger before create customer
        TriggerHelper::fireTrigger('customer-pre-create', $customer);
        //Save it to the database
        $customer->save();
        //Fire trigger after create customer
        TriggerHelper::fireTrigger('customer-post-create', $customer);
        //Go to the 'view' view
        return redirect('/customers/view/' . $customer->id);
    }

    /*
     * The render view (to get client details) function
     * 
     * @param {Integer} $id - The cutomer's identifier 
     */

    public function actionView($id) {
        $customer = Customer::find($id);
        //Return the view
        view()->addLocation(app_path() . '/modules/customers/core/views');
        return view('view', ['customer' => $customer]);
    }

    /*
     * Renders the update form view
     * 
     * @param {Integer} $id - The cutomer's identifier 
     */

    public function actionModify($id) {
        $customer = Customer::find($id);
        //Return the view
        view()->addLocation(app_path() . '/modules/customers/core/views');
        return view('update', ['customer' => $customer]);
    }

    /*
     * Execute the update action and returns to the view page
     * 
     * @param {Request} $request - The POST request to process
     */

    public function actionUpdate(Request $request) {
        //catch all the data
        $data = $request->all();
        //create a empty object and fill it
        $customer = Customer::find($data['id']);
        if ($customer) {
            foreach ($data as $key => $value) {
                if ($key != '_token' && $key != 'id')
                    $customer->$key = $value;
            }
            //Fire trigger before update customer
            TriggerHelper::fireTrigger('customer-pre-update', $customer);
            //Save it to the database
            $customer->save();
            //Fire trigger after update customer
            TriggerHelper::fireTrigger('customer-post-update', $customer);
            //Go to the 'view' view
            return redirect('/customers/view/' . $customer->id);
        }else {
            throw new \Exception('Customer not found');
        }
    }

    /*
     * Deletes a customer using their id
     * 
     * @param {Integer} $id - The customer's uid
     * 
     * @return {Redirect} - Redirect to the customers list
     */

    public function actionDelete($id) {
        //Fetch the customer
        $customer = Customer::find($id);
        //Fire trigger before delete customer
        TriggerHelper::fireTrigger('customer-pre-delete', $customer);
        $customer->delete();
        //Fire trigger after delete customer
        TriggerHelper::fireTrigger('customer-post-delete', $customer);
        //Return to the customer's list
        return redirect('/customers');
    }

}
