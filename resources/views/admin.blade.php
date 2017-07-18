@extends('layouts/page')

@section('content')
	
    <form action="admin" method="post">
    {{csrf_field()}}
        <div class="container">
            <div class="starter-template" style="text-align: center"}>
                <h1>Новый продукт</h1>
            </div>
            <div class="form-group">
                <label>Наименование</label>
                <input name="name" id="name" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Alias</label>
                <input name="alias" id="alias" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Цвет</label>
                <input name="color" id="color" type="text" class="form-control">
            </div>
             <div class="form-group">
                <label>Цена в $</label>
                <input name="price" id="price" type="text" class="form-control">
            </div>
			<div class="form-group">
			<label for="sel1">Выбери бренд</label>
			<select name="brand_id" id="$brand->id" class="form-control" >
				<option value=0 selected>Выбери</option>
				@foreach ($brands as $brand)
					<option value="{{$brand->id}}" name="{{$brand->id}}">{{$brand->name}}</option>
				@endforeach
			</select>
			</div>
            <div class="form-group">
                <label>Discount в %</label>
                <input name="discount" id="discount" type="number" class="form-control">
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea name="description" id="description" type="text" class="form-control" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label>Short description</label>
                <textarea name="short_description" id="short_description" type="text" class="form-control" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label>Add information</label>
                <textarea name="add_information" id="add_information" type="text" class="form-control" rows="5"></textarea>
            </div>
            <input type="hidden" name="rating" value = "2.5">
            <a href="mainPage.php"><button type="button" class="btn btn-danger">Назад</button></a>
            <button class="btn btn-primary">Сохранить</button>
        </div>
    </form>

@endsection

<!--onclick="addAuthor()"-->