<table class="table table-responsive" id="posts-table">
    <thead>
        <th>Supplier Sn</th>
        <th>Supplier Name</th>
        <th>Color</th>
        <th>Class</th>
        <th>Name</th>
        <th>Library</th>
        <th>Percent</th>
        <th>Zhen Number</th>
        <th>Inch Number</th>
        <th>Total Zhen Number</th>
        <th>Width</th>
        <th>Goods Weight</th>
        <th>Pi Number</th>
        <th>Pi Weight</th>
        <th>Weight</th>
        <th>Price</th>
        <th>Face Pic</th>
        <th>Back Pic</th>
        <th>Notes</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($posts as $post)
        <tr>
            <td>{!! $post->supplier_sn !!}</td>
            <td>{!! $post->supplier_name !!}</td>
            <td>{!! $post->color !!}</td>
            <td>{!! $post->class !!}</td>
            <td>{!! $post->name !!}</td>
            <td>{!! $post->library !!}</td>
            <td>{!! $post->percent !!}</td>
            <td>{!! $post->zhen_number !!}</td>
            <td>{!! $post->inch_number !!}</td>
            <td>{!! $post->total_zhen_number !!}</td>
            <td>{!! $post->width !!}</td>
            <td>{!! $post->goods_weight !!}</td>
            <td>{!! $post->pi_number !!}</td>
            <td>{!! $post->pi_weight !!}</td>
            <td>{!! $post->weight !!}</td>
            <td>{!! $post->price !!}</td>
            <td>{!! $post->face_pic !!}</td>
            <td>{!! $post->back_pic !!}</td>
            <td>{!! $post->notes !!}</td>
            <td>
                {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('posts.show', [$post->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('posts.edit', [$post->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
