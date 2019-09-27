<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Superheroes;
use File;

class SuperHeroesController extends Controller
{
    //
    public function show()
    {
        $superheroes = Superheroes::paginate(5);
        return view('welcome', ['superheroes' => $superheroes]);
    }

    public function choiseact(Request $request)
    {
        $superheroes = Superheroes::all();

        if($request->has('Added'))
        {
            return view('changes',['incl'=>'added']);
        };


        if($request->has('Edit'))
        {
            return view('changes',['incl'=>'edit','superheroes'=>$superheroes]);
        };


        if($request->has('Delete'))
        {

            return view('changes',['incl'=>'delete','superheroes'=>$superheroes]);
        };
    }


    public function getHeroById($id)
    {
        $superheroes=Superheroes::find($id);
        return $superheroes;

    }

    public function create(Request $request)
    {
        if($request->hasFile('image1')&&$request->hasFile('image2')&&$request->hasFile('image3'))
        {
            $mimetype2=$request->image2->getClientMimeType();
            $mimetype3=$request->image3->getClientMimeType();
            $mimetype1=$request->image1->getClientMimeType();
            if($mimetype1=='image/jpeg'||$mimetype1=='image/jpg'||$mimetype1=='image/png')
            {
                if($mimetype2=='image/jpeg'||$mimetype2=='image/jpg'||$mimetype2=='image/png')
                {
                    if($mimetype3=='image/jpeg'||$mimetype3=='image/jpg'||$mimetype3=='image/png')
                    {
                        $id=Superheroes::latest()->first();
                        $lastid=$id->id+1;
                        $file3directory= "/public/images/superheroes/$lastid/picture3.jpg";
                        $file2directory="/public/images/superheroes/$lastid/picture2.jpg";
                        $file1directory="/public/images/superheroes/$lastid/picture1.jpg";

                        $superheroes=new Superheroes;
                        $superheroes->nickname=$request->nickname;
                        $superheroes->real_name=$request->real_name;
                        $superheroes->origin_description​=$request->origin_description;
                        $superheroes->superpowers=$request->superpowers;
                        $superheroes->catch_phrase=$request->catch_phrase;
                        $superheroes->images=$file1directory.','.$file2directory.','.$file3directory;
                        $superheroes->save();

                         $file1 = $request->file('image1');
                         $file1->move(public_path() . "/images/superheroes/$lastid",'picture1.jpg');

                         $file2 = $request->file('image2');
                         $file2->move(public_path() . "/images/superheroes/$lastid",'picture2.jpg');

                         $file3 = $request->file('image3');
                         $file3->move(public_path() . "/images/superheroes/$lastid",'picture3.jpg');

                        return view('changes',['incl'=>'added','status'=>'Ty you hero was added!']);


                    }
                }
            }
        }else{
            return view('changes',['incl'=>'added','status'=>'Pls choise all images']);
        }

    }

    public function destroy($id)
    {
        $destinationPath = public_path('images/superheroes/'. $id);
        File::deleteDirectory($destinationPath);
        $superheroes=$this->getHeroById($id);
        $superheroes->delete();
        $superheroes = Superheroes::all();
        return view('changes',['incl'=>'delete','superheroes'=>$superheroes]);
    }

    public function editshow($id)
    {
        $superheroe=$this->getHeroById($id);
        return view('editarticle',compact('superheroe','superheroe'));
    }

    public function edit(Request $request)
    {

        if($request->hasFile('image1'))
        {

            $mimetype1=$request->image1->getClientMimeType();
            if($mimetype1=='image/jpeg'||$mimetype1=='image/jpg'||$mimetype1=='image/png')
            {
                $destinationPath = public_path('/images/superheroes/'.$request->id.'/picture1.jpg');
                File::delete($destinationPath);
                $file1 = $request->file('image1');
                $file1->move(public_path() . "/images/superheroes/$request->id",'picture1.jpg');
            }
        }

        if($request->hasFile('image2'))
        {

            $mimetype1=$request->image2->getClientMimeType();
            if($mimetype1=='image/jpeg'||$mimetype1=='image/jpg'||$mimetype1=='image/png')
            {
                $destinationPath = public_path('/images/superheroes/'.$request->id.'/picture2.jpg');
                File::delete($destinationPath);
                $file1 = $request->file('image2');
                $file1->move(public_path() . "/images/superheroes/$request->id",'picture2.jpg');
            }
        }

        if($request->hasFile('image3'))
        {

            $mimetype1=$request->image3->getClientMimeType();
            if($mimetype1=='image/jpeg'||$mimetype1=='image/jpg'||$mimetype1=='image/png')
            {
                $destinationPath = public_path('/images/superheroes/'.$request->id.'/picture3.jpg');
                File::delete($destinationPath);
                $file1 = $request->file('image3');
                $file1->move(public_path() . "/images/superheroes/$request->id",'picture3.jpg');
            }
        }

        $superheroes=$this->getHeroById($request->id);
        $superheroes->nickname=$request->nickname;
        $superheroes->real_name=$request->real_name;
        $superheroes->origin_description​=$request->origin_description​;
        $superheroes->superpowers=$request->superpowers;
        $superheroes->catch_phrase=$request->catch_phrase;
        $superheroes->save();
        $superheroes = Superheroes::all();
        return view('changes',['incl'=>'edit','superheroes'=>$superheroes,'status'=>'Your hero is edit:)']);
    }

    public function showOneHeroInfo($id)
    {
        $hero=$this->getHeroById($id);
        return view('hero',['hero'=>$hero]);
    }
}
