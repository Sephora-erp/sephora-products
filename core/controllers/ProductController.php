<?php

namespace App\modules\products\core\controllers;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use App\modules\products\core\models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Helpers\TriggerHelper;

class ProductController extends Controller {

    /*
     * Render's te create form view
     */

    public function actionNew() {
        view()->addLocation(app_path() . '/modules/products/core/views');
        return view('new');
    }

    /*
     * Cretes a new product and stores it on the database
     *
     * @param {Request} $request - The POST request
     *
     * @return {Redirect} Redirect to the newly created product
     */
    public function actionCreate(Request $request){
      $data = $request->all();
      $product = new Product();
      //Set the attributtes
      $product->type = $_POST['type'];
      $product->name = $_POST['name'];
      $product->description = $_POST['description'];
      $product->vat = $_POST['vat'];
      $product->price = $_POST['price'];
      $product->weigth = $_POST['weight'];
      $product->d_x = $_POST['d_x'];
      $product->d_y = $_POST['d_y'];
      $product->d_z = $_POST['d_z'];
      $product->provider_price = $_POST['provider_price'];
      $product->fk_user = \Auth::user()->id;
      //save the product
      $product->save();
      //redirect to the view form
      return redirect('/products/view/'.$product->id);
    }


    /*
     * Render's the view of a product page
     *
     * @param {Integer} $id - The identifier
     */
    public function actionView($id){
      $product = Product::find($id);
      //render the view
      view()->addLocation(app_path() . '/modules/products/core/views');
      return view('view', ['product' => $product]);
    }

    /*
     * Render's a list with all of the products
     */
     public function actionList()
     {
       $products = Product::all();
       //render the view
       view()->addLocation(app_path() . '/modules/products/core/views');
       return view('list', ['products' => $products]);
     }

   /*
    * Deletes the product and later returns it to the list page
    *
    * @param {Integer} $id - The identifier
    */
     public function actionDelete($id){
       $product = Product::find($id);
       //Delete the product
       $product->delete();
       //redirect to the list
       return redirect('/products/list');
     }
     /*
      * Render's the update of a product
      *
      * @param {Integer} $id - The identifier
      */
     public function actionUpdate($id){
       $product = Product::find($id);
       //render the view
       view()->addLocation(app_path() . '/modules/products/core/views');
       return view('update', ['product' => $product]);
     }
     /*
      * Updates a  product and stores it on the database
      *
      * @param {Request} $request - The POST request
      *
      * @return {Redirect} Redirect to the product view
      */
     public function actionModify(Request $request){
       $data = $request->all();
       $product = Product::find($data['id']);
       //Set the attributtes
       $product->type = $_POST['type'];
       $product->name = $_POST['name'];
       $product->description = $_POST['description'];
       $product->vat = $_POST['vat'];
       $product->price = $_POST['price'];
       $product->weigth = $_POST['weight'];
       $product->d_x = $_POST['d_x'];
       $product->d_y = $_POST['d_y'];
       $product->d_z = $_POST['d_z'];
       $product->provider_price = $_POST['provider_price'];
       $product->fk_user = \Auth::user()->id;
       //save the product
       $product->save();
       //redirect to the view form
       return redirect('/products/view/'.$product->id);
     }
}
