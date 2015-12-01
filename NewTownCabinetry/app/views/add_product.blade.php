<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>

<body>

<h1>Add Product</h1>
<div>
<fieldset >
	<legend>Add Product</legend>

	{{ Form::open(array('url' => 'show_product')) }}

	<br>
	{{ Form::label('supplier', 'Supplier') }}
	{{ Form::select('suppliers_id', ['' => 'Choose Supplier'] + $suppliers) }}

	{{ Form::label('category', "Category") }}
	{{ Form::select('categories_id', ['' => 'Choose Category'] + $categories) }}
	<br>

	{{ Form::label('productId', 'Id') }}
    {{ Form::text('productId') }}
<br>
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name') }}
<br>
    {{ Form::label('unitPrice', 'Cost') }}
    {{ Form::number('unitPrice') }}
<br>
	{{ Form::label('quantity', 'Quantity') }}
	{{ Form::number('quantity') }}
<br>
	{{ Form::label('color', 'Color') }}
	{{ Form::text('color')}}
<br>
	{{ Form::submit('Add') }}
	{{ Form::close() }}
</fieldset>
</div>
</body>
</html>