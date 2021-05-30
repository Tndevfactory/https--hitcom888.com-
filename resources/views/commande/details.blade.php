@extends('layouts.app') 

@section('meta')

<title>commande details</title>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
     <h1>commande details</h1>
     {{-- // ideal for displayin all product by language --}}
     @if(App::getLocale()=='fr')
          <h1> french section  </h1> 
          @if(count($cmFr) > 0) @php $cm=$cmFr @endphp @endif
     @elseif(App::getLocale()=='en')
          <h1> english section </h1>  
          @if(count($cmEn) > 0) @php  $cm=$cmEn  @endphp @endif
     @elseif(App::getLocale()=='ar')
          <h1> arabe section  </h1> 
          @if(count($cmAr) > 0) @php $cm=$cmAr  @endphp @endif
     @endif


     <h3>
      @foreach ($cm as $item)
      {{$item->name }}
      @endforeach
     </h3>
  
     
      
      
     
      
    </div>
</div>
@endsection