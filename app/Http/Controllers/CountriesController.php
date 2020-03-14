<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Country;
//Country naamer model ba class ta import kora lagbe 

class CountriesController extends Controller
{
    public function create()
    {
        return view('country.create');
    }

    public function store(Request $request) { //store method er naam jeta web.php er route a niyesi 
//approach 4 for taken data, uporer parameter a data pass korle se(approach 3 for taken data) er moto kaj korbe
// ata dependency injection through er dara holo,fillable property dite hobe

//approach 3 for taken data, a khetre store function er parameter a data(Request $request) pass korte hobe
//ata dependency injection through er dara holo, fillable property dite hobe
//         $name = $request->input('name');
//         $capital = $request->input('capital');
//         $currency = $request->input('currency');
//         $population = $request->input('population');

//approach 1 for taken data, method a kono parameter dite hoina ata sudhu approach 3 er jonne
        // $name = request('name');
        // $capital = request('capital');
        // $currency = request('currency');
        // $population = request('population');

//approach 2 for taken data, ekhane store function er parameter a data pass korte hoi na
        // $name = request()->input('name');
        // $capital = request()->input('capital');
        // $currency = request()->input('currency');
        // $population = request()->input('population');

// approach 1 for data insert , fillable property lage
//         Country::create([       //Country hosse model r create hosse method

//ata k bole mass assign je karone model a fillable a bole dia lagbe input field gulo     
//             'name' => $name,
//             'capital' => $capital,
//             'currency' => $currency,
//             'population' => $population 
//         ]);

//approach 2 for data insert, $fillable lage na

        // $country = new Country; //Country er 1ta object create korlam

        // $country->name = $name; //oi object er sob gulo attribute fill korlam
        // $country->capital = $capital;
        // $country->currency = $currency;
        // $country->population = $population;

        // $country->save();  //save method call korar sathe db te save hobe
//ai save method ta Country object er 1ta method ja country(model) class er

        //    Country::create( $request->all() );
//approach 3 for data insert,ata dile database a save hoye jabe r ata 1st approach           

              Country::create( $request->only('name', 'capital', 'currency', 'population') );
//approach 3 for data insert, akhane auto save kore nibe
            
        // Country::create( $requested->except('name') );
//approach 3 for data insert, ata dara sudhu name field er data insert korbe na            

         // return back();
//back method dara data insert hoye gelo again input page a chole jabe        

            return redirect('/countries');
//data save hobar por ta redirect hoye 127.0.0.1:8000/countries url a jabe            
 
    }

    public function showallcountry()
    {
        $countries = Country::all();
 //Country model er sob gulo data db theke anbo

        return view('country.ShowAllCountry', compact('countries'));
//ShowAllCountry naamer 1ta view create korbo country folder a      
//compact dara countries table er data ShowAllCountry file a chole jabe   
    }

    public function showcountrydetail($id) // view er code ja detail column show er jonne
    //r individual detail er jonne id var k parameter a pass korano holo
    {
        //$country = Country::where('id','=',$id)->first();
// Country:: hosse model r first use hoise 1ta country naam/list er jonne
//first method dia primary key abong baki onno sob column o ber kora jai 

         $country = Country::find($id); //controller theke $country variable a data pass
   //find holo primary key hosse id sekhane primary key dara search kore dekhabe      
//ata dara ata bojhai: select * from countries where id = $id;
        //$country = Country::where('id','=',$id);  '=' ata na dile o hobe
        //$country = Country::where('id','=',$id)->first(); '=' ata na dile o hobe
         
////find method ta primary key er jonne kaj kore,onno column a kaj korbe na
        return view('country.detail', compact('country'));
        //compact a country hosse variable ja uporer $country variable 
//ekhon country folder a detail naamer view create korte hobe        
    }

        public function edit($id) // approach-2 for edit method
//a khetre route a ata hobe, Route::get('/countries/{id}/edit','CountriesController@edit');
// approach-1 for edit method
//      public function edit(Country $country) //ata k bole (route+model) route model binding
//      return view('country.edit', compact('country')); //ai com code a kaj hobe 
//approach 3 for taken data er moto dependency injection through er dara holo,
//se khetre route a ata hobe, Route::get('/countries/{country}/edit','CountriesController@edit');
    {
        $country = Country::find($id);
//ata o same hobe showcountrydetail method er moto

        return view('country.edit', compact('country'));
        
    }

    public function update($id) //id dara dhorbe -- Update er coding
    {
        $country = Country::find($id); //id dhore db theke sob data ana holo 
//patch method er jonne update model kora laglo post ba get hole kora lagto na
       //approach-1 for taken data
        $name = request('name');
        $capital = request('capital');
        $currency = request('currency');
        $population = request('population');

//ekhon form theke value gulo nibo maane 1st approach dara data catch korbo
       //approach-2 for data insert without creating object ($country=new Country)v
        // $country->name = $name;
        // $country->capital = $capital;
        // $country->currency = $currency;
        // $country->population = $population;

        //approach-2 for update
        $country->update([
            'name' => $name,
            'capital' => $capital,
            'currency' => $currency,
            'population' => $population

        ]);

        $country->save();
// save er jone save() method use korlam

//        return back();
//ata dile edit j page a hobe update o sei page a save hoye thakbe        
        return redirect('/countries');

    }

    public function delete($id) //delete er jonne
    {
        $country = Country::find($id); 
        
        $country->delete(); //laravel a bydefault toiri kora function
    
        return back();
}
}