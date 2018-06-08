@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        	<form action="edit/{{$post[0]->id}}" method="post">
        		<input type="hidden" name="_token" value = "<?php echo csrf_token();?>">
        		<table>
        			<tr>
	        			<td>Title</td>
	        			<td>
	        				<input type="text" name="title" value="{{$post[0]->title}}">
	        			</td>
        			</tr>

        			<tr>
        				<td>Body</td>
        				<td>
        					<input type="text" name="title" value="{{$post[0]->body}}">
        				</td>
        			</tr>
        			<tr>
        				<td>
        					<input type = 'submit' value = "Update post">
        				</td>
        			</tr>
        		</table>
        	</form>

        </div>
    </div>
</div>

@endsection