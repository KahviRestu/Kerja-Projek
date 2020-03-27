@extends('layouts.master')

@section('content')
	<div class="card shadow">
		<div class="card-header border-0">
		    <div class="row">
		      <div class="col-md-6">
		          <h3 class="mb-0">Data Absen</h3>
		      </div>
		      <!-- <div class="col-md-6 text-right">                        
		        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">Tambah Data</button>                            
		      </div> -->
		    </div>
		  </div>
		  <div class="table-responsive myTable" id="myTable">
		    <table class="table align-items-center table-flush">
		      <thead class="thead-light">
		        <tr>
		          <th scope="col">No</th>
		          <th scope="col">NIP</th>
		          <th scope="col">Nama</th>
		          <th scope="col">Tanggal</th>
		        </tr>
		      </thead>
		      <tbody>
		      	@php
		      		$no =1;
		      	@endphp
		      	@foreach($absen as $a)
		        <tr>
		        	<td>{{$no++}}</td>
		        	<td>{{$a->nip}}</td>
		        	<td>{{$a->nama}}</td>
		        	<td>{{$a->created_at}}</td>
		        </tr>
		        @endforeach
		      </tbody>
		    </table>
		  </div>
	</div>
@endsection