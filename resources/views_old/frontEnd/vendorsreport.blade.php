<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('/assetsFrontEnd/Vendor.css')}}">
    <title>Vendors-Report-Page</title>
  </head>
  <body>
    <div class="_777">
        <div class="_780">
      <h1>Vendors Report Page</h1>
      <table class="_778">
        <tr>
          <th>Number of total products</th>
          <th>Total Earning per week</th>
          <th>Owners Commission</th>
          <th>Payable Amount.</th>
        </tr>
        <tr>
          <td>{{$products_total}}</td>
          <td>{{$report->total_Amount}}</td>
          <td>{{$report->total_Commission}}</td>
          <td>{{$report->payble}}</td>
        </tr>



      </table>
      <br>

      <!-- Button trigger modal -->
<button type="button" class="btn1" data-toggle="modal" data-target="#exampleModal">
   Pay Amount
</button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Amount</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <table>
            <tr>
                <th>Vendor ID</th>
                <th>Bank name</th>
                <th>Account holder name</th>
                <th>Account number</th>
            </tr>



            <tr>
                <td>{{$report->vendor_ID}}</td>
                <td>{{$Bank[0]->Bank_name}}</td>
                <td>{{$Bank[0]->Account_holder_name}}</td>
                <td>{{$Bank[0]->Account_number}}</td>
            </tr>

        </table>
        </div>
        <div class="modal-footer">

          <a href="{{route('paied',$report->id)}}" class="btn btn-primary">Mark as Paid</a>
        </div>
      </div>
    </div>
  </div>

      <h1>Booking Details</h1>
      <table class="_779">
        <tr>
          <th>Serial number</th>
          <th>Product name</th>
          <th> Order date</th>
          <th>Total order amount</th>
          <th>Commission</th>
        </tr>
        @foreach ($prod_count as $index => $p)
        <tr>

            <td>{{$index+1}}</td>
          <td>{{$p->product_name}}</td>
          <td>{{$p->created_at}}</td>
          <td>{{$p->total_price}}</td>
          <td>{{$p->Service_charges}}</td>
        </tr>
        @endforeach
      </table>
    </div>
    </div>
  </body>
</html>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
