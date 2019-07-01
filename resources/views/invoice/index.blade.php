@extends('layouts.app')

@section('content')


<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">

<div class="row">
<div class="col-md-6">


<h3 class="card-title">Manajemen Invoice</h3>
</div>
</div>
</div>

<div class="card-body">
@if (session('success'))
<div class="alert alert-succes">
{  !!session('success') !!     }
</div>

@endif
<table class="table table-hover table-bordered">
<thead>
<tr>
<td>Invoice ID</td>
<td>Nama Lengkap</td>
<td>No Telp</td>
<td>Total Item</td>
<td>Subtotal</td>
<td>Pajak</td>
<td>Total</td>
<td>Aksi</td>
</tr>
</thead>
<tbody>

@forelse ($invoice as $row)
<tr>
<td> <strong> #{{  $row->id   }}      </strong>   </td>
<td> <strong> {{  $row->customer->name   }}      </strong>   </td>
<td> <strong> {{  $row->customer->phone   }}      </strong>   </td>
<td> <span class="badge-badge success"> {{ $row->detail->count()      }} Item     </td>
<td>  Rp {{  number_format($row->total)     }}          </td>
<td>  Rp {{  number_format($row->tax)     }}          </td>
<td>  Rp {{  number_format($row->total_price)     }}          </td>
<td>

<form action=" {{   route('invoice/destroy', $row->id)    }}  " method="POST">
@csrf
<input type="hidden" name="_method" value="DELETE">
<a href="{{  route('invoice.print', $row->id }})  " class="btn btn-warning btn-sm"> Print </a>

<a href="{{  route('invoice.edit', $row->id }})  " class="btn btn-warning btn-sm"> Edit </a>
<button class="btn btn-danger btn-sm"> Delete </button>
 </form>
 </td>
 </tr>
 @empty
 <tr>
 <td colspan="8" class="text-center"> Tidak ada data </td>
</tr>
@endforelse
</tbody>
</table>
<div class="float-right">
{{ $invoice->links     ()  }}




</div>

</div>



</div>

</div>
</div>
</div>
@endsection





