@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Sell Products</div>

                <div class="card-body">
                    <div class="row">
                   <div class="col-md-6" style="background: red; padding: 20px;">
                    <form action="{{route('postAddPurchase')}}" method="POST">
                        @csrf()
                        <fieldset class="form-group">
                            <label for="formGroupExampleInput">Product</label>
                            <select name="product" type="text" class="form-control">
                                @foreach($products as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="formGroupExampleInput2">Qty</label>
                            <input type="text" name="qty" class="form-control">
                        </fieldset>

                        <fieldset class="form-group">
                            <label for="formGroupExampleInput2"></label>
                            <input type="submit" class="form-control" value="Add">
                        </fieldset>
                    </form>
                       
                   </div>
                   <div class="col-md-6">
                       <h3>Sumarry</h3>
                       @if($getproduct)
                       <table class="table table-hover table-inverse">
                           <thead>
                               <tr>
                                   <th>ID</th>
                                   <th>Product</th>
                                   <th>Cost</th>
                                   <th>QTY</th>
                                   <th>Total</th>
                               </tr>
                           </thead>
                           <tbody>
                            @foreach($getproduct as $abc)
                               <tr>
                                   <td>{{$abc->id}}</td>
                                   <td>{{$abc->product_id}}</td>
                                   <td>{{$abc->cost}}</td>
                                   <td>{{$abc->qty}}</td>
                                   <td>{{$abc->totalcost}}</td>
                               </tr>
                            @endforeach
                           </tbody>
                           <tfoot>
                               <tr></tr>>
                                   <td colspan="4"><strong>Grand Total</strong></td>
                                   <td>{{$grandtotal}}</td>
                               </tr>
                           </tfoot>
                       </table>
                       <a href="{{route('getCancelSell')}}" class="btn btn-primary">Cancel</a> <a href="" class="btn btn-primary">Paid</a>
                       @endif
                   </div>
               </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
