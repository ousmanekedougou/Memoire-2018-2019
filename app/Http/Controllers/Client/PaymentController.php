<?php

namespace App\Http\Controllers\Client;

use Carbon\Carbon;
use Paydunya\Setup;
use Illuminate\Http\Request;
use App\Model\Admin\Rendez_vous;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Paydunya\Checkout\CheckoutInvoice;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoice = new CheckoutInvoice();
        $invoice->addItem("Chaussures Croco", 3, 10000, 30000, "Chaussures faites en peau de crocrodile authentique qui chasse la pauvreté");
        $ticker = Rendez_vous::where('user_id', '=', Auth::guard('web')->user()->id)->where('status','=',1 )->where('date_medecin', '>=' ,Carbon::today())->first();
        // dd($ticker->medecin->prix);
        $invoice->setTotalAmount($ticker->medecin->prix);
        $invoice->setCallbackUrl("http://fathomless-escarpment-76115.herokuapp.com");
        


        if($invoice->create()) {
            $ticker = Rendez_vous::where('user_id', '=', Auth::guard('web')->user()->id)->where('status','=',1 )->where('date_medecin', '>=' ,Carbon::today())->first();
            $ticker->prix = $ticker->medecin->prix;
            $ticker->save();
            return redirect(url($invoice->getInvoiceUrl()));
        }else{
             dd($invoice->response_text);
        }
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function retoure(Request $request)
    {
        try {
            //Prenez votre MasterKey, hashez la et comparez le résultat au hash reçu par IPN
            if($request['data']['hash'] === hash('sha512', env('PY_MASTER_KEY'))) {
          
              if ($request['data']['status'] == "completed") {
                  //Faites vos traitements backoffice ici...
              }
          
              } else {
                    die("Cette requête n'a pas été émise par PayDunya");
              }
            } catch(Exception $e) {
              die();
            }
          
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
