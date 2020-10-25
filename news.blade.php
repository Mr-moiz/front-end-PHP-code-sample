@extends('header&footer')

@section('title', 'Page Title')

@section('content')

<section class="s-content s-content--top-padding" style="direction: rtl">

<div class="row narrow">
<div class="row entries-wrap add-top-padding wide">
            <div class="entries">
            @foreach($data as $d)


<article class="col-block">
                    
                    <div class="item-entry" data-aos="zoom-in">
                        <div class="item-entry__thumb">
                                <img src="my_folder/{{$d->src}}" 
                                        srcset="my_folder/{{$d->src}} 1x, my_folder/{{$d->src}} 2x" alt="">
                           </div>
        
                        <div class="item-entry__text">
                        
                            <h1 class="item-entry__title"><a href="{{url('get_news/'. $d->id)}}">{{$d->address}}</a></h1>
                            <div class="item-entry__date">
                                <a href="#">{{$d->date}}</a>
                            </div>
                        </div>
                    </div> <!-- item-entry -->

                </article> <!-- end article -->
                @endforeach
</div>
</div>
</div>
</section>
@endsection
