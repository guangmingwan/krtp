<!-- Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id', 'Id:') !!}
    {!! Form::number('id', null, ['class' => 'form-control']) !!}
</div>

<!-- Supplier Sn Field -->
<div class="form-group col-sm-6">
    {!! Form::label('supplier_sn', 'Supplier Sn:') !!}
    {!! Form::number('supplier_sn', null, ['class' => 'form-control']) !!}
</div>

<!-- Supplier Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('supplier_name', 'Supplier Name:') !!}
    {!! Form::text('supplier_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Color Field -->
<div class="form-group col-sm-6">
    {!! Form::label('color', 'Color:') !!}
    {!! Form::text('color', null, ['class' => 'form-control']) !!}
</div>

<!-- Class Field -->
<div class="form-group col-sm-6">
    {!! Form::label('class', 'Class:') !!}
    {!! Form::number('class', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Library Field -->
<div class="form-group col-sm-6">
    {!! Form::label('library', 'Library:') !!}
    {!! Form::text('library', null, ['class' => 'form-control']) !!}
</div>

<!-- Percent Field -->
<div class="form-group col-sm-6">
    {!! Form::label('percent', 'Percent:') !!}
    {!! Form::number('percent', null, ['class' => 'form-control']) !!}
</div>

<!-- Zhen Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('zhen_number', 'Zhen Number:') !!}
    {!! Form::text('zhen_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Inch Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('inch_number', 'Inch Number:') !!}
    {!! Form::text('inch_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Zhen Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_zhen_number', 'Total Zhen Number:') !!}
    {!! Form::text('total_zhen_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Width Field -->
<div class="form-group col-sm-6">
    {!! Form::label('width', 'Width:') !!}
    {!! Form::number('width', null, ['class' => 'form-control']) !!}
</div>

<!-- Goods Weight Field -->
<div class="form-group col-sm-6">
    {!! Form::label('goods_weight', 'Goods Weight:') !!}
    {!! Form::number('goods_weight', null, ['class' => 'form-control']) !!}
</div>

<!-- Pi Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pi_number', 'Pi Number:') !!}
    {!! Form::number('pi_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Pi Weight Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pi_weight', 'Pi Weight:') !!}
    {!! Form::number('pi_weight', null, ['class' => 'form-control']) !!}
</div>

<!-- Weight Field -->
<div class="form-group col-sm-6">
    {!! Form::label('weight', 'Weight:') !!}
    {!! Form::number('weight', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Face Pic Field -->
<div class="form-group col-sm-6">
    {!! Form::label('face_pic', 'Face Pic:') !!}
    {!! Form::text('face_pic', null, ['class' => 'form-control']) !!}
</div>

<!-- Back Pic Field -->
<div class="form-group col-sm-6">
    {!! Form::label('back_pic', 'Back Pic:') !!}
    {!! Form::text('back_pic', null, ['class' => 'form-control']) !!}
</div>

<!-- Notes Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('notes', 'Notes:') !!}
    {!! Form::textarea('notes', null, ['class' => 'form-control', 'rows' => '5']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('posts.index') !!}" class="btn btn-default">Cancel</a>
</div>
