<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Dish;
use App\Models\Room;
use App\Models\Staff;
use App\Models\Option;
use App\Models\Slider;
use App\Models\Article;
use App\Models\Service;
use App\Models\RoomReview;
use App\Models\AboutContent;
use App\Models\GalleryPhoto;
use App\Models\RoomCategory;
use Illuminate\Http\Request;
use App\Models\Advertisement;
use App\Models\Booking;
use App\Models\ContactMessage;
use App\Models\GalleryCategory;
use Illuminate\Contracts\Database\Eloquent\Builder;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Home()
    {
        $sliders = Slider::orderBy('order', 'asc')->get();

        $about = AboutContent::orderBy('id', 'desc')
            ->first();

        $ad = Advertisement::where('is_Main', 1)
            ->first();
        $count_ad = Advertisement::all()->count();

        $rooms = Room::where('is_Available', 1)
            ->inRandomOrder()
            ->take(3)
            ->get();
        $count_rooms = Room::where('is_Available', 1)->count();

        $room_cats = RoomCategory::all();
        $rooms_booking = Room::where('is_Available', 1)
        ->orderBy('room_category_id', 'asc')
        ->get();

        $services = Service::all();
        $count_services = Service::all()->count();

        $gallery = GalleryPhoto::inRandomOrder()
            ->take(8)
            ->get();
        $count_photos = GalleryPhoto::all()->count();

        $dishes = Dish::orderBy('id', 'asc')
            ->paginate(4)
            ->fragment('restaurant');
        $count_dish = Dish::all()->count();

        $articles = Article::orderBy('id', 'desc')
            ->inRandomOrder()
            ->take(3)
            ->get();
        $count_articles = Article::all()->count();

        $reviews = RoomReview::orderBy('id', 'desc')
            ->take(9)
            ->get();
        $count_reviews = RoomReview::all()->count();

   
        return view('pages.home', compact('sliders', 'about', 'rooms', 'room_cats', 'rooms_booking', 'services', 'gallery','dishes', 'articles', 'reviews', 'ad', 'count_rooms','count_ad', 'count_dish', 'count_services', 'count_photos', 'count_reviews', 'count_articles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function Room(Request $request){

        $room_cats = RoomCategory::withCount('rooms')
            ->orderBy('id', 'asc')
            ->get();

        $room_tags = Tag::all();

        $search = $request->search;
        $category = $request->category;
        $tags = $request->tags;

    
        $rooms = Room::
        when($search, function ($query) use($search) { /* Fonction search */
            return $query->where([
                            ['is_Available', 1],
                            ['name', 'like', "%{$search}%"]]) /* Par nom de room */
                        ->orWhere([
                            ['is_Available', 1],
                            ['nb_persons', 'like', "%{$search}%"] ]) /* Par nombre personnes */
                        ->orWhereHas('room_category', function($query) use($search){
                            return $query->where('category', 'like', "%{$search}%");} /* Par nom de catégorie*/
            );
        })
        /* Category filter */
        ->when($category, function ($query) use ($category) {
            return $query->where([
                            ['room_category_id', +$category],
                            ['is_Available', 1], ]);
        }

        /* Tag */
        /* ->when('tags', function($query) use($tags) {
                return $query->where('is_Available', 1)
                ->whereHas('tag', function ($q) use($tags){
                    return $q->where('tag', 'like', "{$tags}");
                });
        }) */

        /* Pas de filtre */
        , function ($query) {
            return $query->where('is_Available', 1)
            ->orderBy('id', 'asc');
        })
        ->paginate(15);


        return view('pages.rooms-list', compact('rooms', 'room_cats', 'room_tags'));
    }

    public function ShowRoom($id){
        $room = Room::find($id);
        $descriptions = $room->room_descriptions;
        $photos = $room->room_photos;

        /* Tags de la room actuelle, en array */
        $tags = $room->tag->pluck('tag')->toArray();

        /* Room similaires */
        $similar = Room::where([
            ['id', '!=' , $room->id],
            ['is_Available', 1]])

        ->orWhereHas('room_category', function($query) use($room){
            return $query->where([
                ['room_category_id', $room->room_category_id],
                ['id', '!=' , $room->id],
                ['is_Available', 1]
            ]);
        })

       /*  ->orWhereHas('tag', function ($query) use($tags, $room) {
            return $query->where([
                ['tag', 'like', $tags],
                ['id', '!=' , $room->id],
                ['is_Available', ]
            ]);
        }) */
        ->inRandomOrder()
        ->take(3)
        ->get();


        $options = Option::all();

        $reviews = RoomReview::whereHas('booking', function($q) use($room) {
            $q->where('room_id', $room->id);})
                ->where('is_Active', 1)
                ->get();

        $average = $reviews->avg('rating');

        return view('pages.room', compact('room', 'options', 'descriptions', 'photos', 'similar', 'reviews', 'average'));
    }

    public function Staff(){
        $boss = Staff::first();
        $staffmembers = Staff::whereNot('id', 1)
            ->inRandomOrder()
            ->take(7)
            ->get();
        return view('pages.staff', compact('boss', 'staffmembers'));
    }

    public function Gallery(){
        $photos = GalleryPhoto::all();

        $categories = GalleryCategory::whereNot('id', 1) -> get();

        return view('pages.gallery', compact('photos', 'categories'));
    }

    public function ShowBlog($id){
        $article = Article::find($id);

        return view('pages.blog-post', compact('article'));
    }
}
