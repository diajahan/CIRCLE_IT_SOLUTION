<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<style>

body{
	//dev
	//height:2000px;
	padding:10px;
	padding-bottom:50px;
}
h1{
	margin-bottom:2000px;
}

.mobile-bottom-nav{
	position:fixed;
	bottom:0;
	left:0;
	right:0;
	z-index:1000;

	//give nav it's own compsite layer
	will-change:transform;
	transform: translateZ(0);

	display:flex;

	height:50px;

	box-shadow: 0 -2px 5px -2px #333;
	background-color:#fff;

	&__item{
		flex-grow:1;
		text-align:center;
		font-size:12px;

		display:flex;
		flex-direction:column;
		justify-content:center;
	}
	&__item--active{
		//dev
		color:red;
	}
	&__item-content{
		display:flex;
		flex-direction:column;
	}
}
</style>
</head>
<body style="background-color:white;">
    @php
    $categories=App\Models\Category::where('status','=','1')->get();
 @endphp
 <ul class="dropdown-menu dropdown-menu-white" style="background:#99244D!important; border-radius:0;  border:0; margin-top:5px!important;"  aria-labelledby="dropdownMenuButton2">
    @foreach($categories as $category)
    <li style="border-buttom:1px solid #99244D!important;"><a class="dropdown-item"
     href="{{url('cate-products/'.$category->id)}}"
     style="border-radius:0!important; font-size:12px;
     font-weight:bold;color:white;">{{$category->category_name}}</a></li>
   @foreach($category->children as $cate)
    <ul class="dropdown-menu dropdown-menu-white"
     style="background:#99244D!important; border-radius:0;  border:0; margin-top:3px!important; margin-left:1%!important;"  aria-labelledby="dropdownMenuButton2">
    {{--<x-category :category="$category" />--}}
    @if ($cate->status == '1')
    <li style="border-buttom:1px solid #99244D!important;"><a class="dropdown-item"
     href="{{url('cate-products/'.$cate->id)}}"
     style="border-radius:0!important; font-size:12px;
     font-weight:bold;color:white;">{{$cate->category_name}}</a>

		@foreach($cate->children as $subsubcate)
		<ul class="dropdown-menu dropdown-menu-white"
		style="background:#99244D!important; border-radius:0;  border:0; margin-top:3px!important; margin-left:1%!important;"  aria-labelledby="dropdownMenuButton2">
		{{--<x-category :category="$category" />--}}
		@if ($subsubcate->status == '1')
		<li style="border-buttom:1px solid #99244D!important;"><a class="dropdown-item"
		href="{{url('cate-products/'.$subsubcate->id)}}"
		style="border-radius:0!important; font-size:12px;
		font-weight:bold;color:white;">{{$subsubcate->category_name}}</a>

			@foreach($subsubcate->children as $subsubsubcate)
			<ul class="dropdown-menu dropdown-menu-white"
			style="background:#99244D!important; border-radius:0;  border:0; margin-top:3px!important; margin-left:1%!important;"  aria-labelledby="dropdownMenuButton2">
			{{--<x-category :category="$category" />--}}
			@if ($subsubsubcate->status == '1')
			<li style="border-buttom:1px solid #99244D!important;"><a class="dropdown-item"
			href="{{url('cate-products/'.$subsubsubcate->id)}}"
			style="border-radius:0!important; font-size:12px;
			font-weight:bold;color:white;">{{$subsubsubcate->category_name}}</a></li>
			@endif
			</ul>
			@endforeach

		</li>
		@endif
		</ul>
		@endforeach
	 </li>
    @endif

    </ul>
    @endforeach
    @endforeach

</body>
</html>
