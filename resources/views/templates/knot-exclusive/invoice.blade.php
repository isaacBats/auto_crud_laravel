@extends('layouts.app')

@section('content')
<div class="col-md-9 panel-parent">
  <div class="panel knot-panel">      
    <div class="row">
      <div class="col-sm-6 invoice-from">
        <h3 class="invoice-heading">From</h3>
        <address class="invoice-address">
          <p class="address-name">Triscote Ava</p>
          <p>North section, 29</p>
          <p>50003 Zaragoza</p>
          <p class="location">Spain</p>
          <p><small><span class="text-muted">Phone:</span> (+892) 121288791230</small></p>
          <p><small><span class="text-muted">E-mail:</span> <a href="mailto:example.com">admin@bootstrapguru.com</a></small></p>
        </address>
      </div>
      <div class="col-sm-6 invoice-to">
        <h3 class="invoice-heading">To</h3>
        <address class="invoice-address">
          <p class="address-name">Richard parker</p>
          <p>California north state</p>
          <p>2557-67-12 brista</p>                  
        </address>
      </div>
    </div>            
    <div class="row">
      <div class="col-md-12">
        <table class="table table-invoice">
          <thead>
            <tr>
              <th>Product</th>                      
              <th>Price</th>
              <th>Qty</th>
              <th>Tax</th>
              <th>Subtotal</th>
            </tr>
          </thead>
          <tbody>                  
            <tr>
              <td>Andriod phone</td>                      
              <td>$32.27</td>
              <td>1</td>
              <td>$1.00</td>
              <td>$31.27</td>
            </tr>
            <tr>
              <td>Tomato ketchup</td>                      
              <td>$20.00</td>
              <td>1</td>
              <td>$0.03</td>
              <td>$20.00</td>
            </tr>
            <tr>
              <td>Sugar</td>                      
              <td>$7.00</td>
              <td>1</td>
              <td>$10.00</td>
              <td>$17.00</td>
            </tr>
          </tbody>          
          <tfoot>
            <tr>
              <td colspan="3"></td>
              <td class="col_total text-right">Subtotal</td>
              <td class="col_total"><strong>$68.27</strong></td>
            </tr>
            <tr>
              <td colspan="3"></td>
              <td class="col_total text-right">Tax</td>
              <td class="col_total"><strong>$5.00</strong></td>
            </tr>
            <tr>
              <td colspan="3"></td>
              <td class="col_total text-right">Shipping</td>
              <td class="col_total"><strong>$0.00</strong></td>
            </tr>
            <tr class="grand_total">
              <td colspan="3"></td>
              <td class="col_total text-right">Grand Total</td>
              <td class="col_total"><strong>$73.00</strong></td>
            </tr>
          </tfoot>
        </table>
      </div>
    </div>            
  </div>
  <!-- kont-panel -->
</div>
<!-- col-md-9 -->
<div class="col-md-3 panel-parent">    
  <div class="invoice-inactivity">            
    <h3 class="invoice-heading">Invoices Activity</h3>
    <ul>
      <li class="complete"><a href="#"><strong>mark zukerburg</strong></a> purchased code worth 70,000$ at lara.com <p>jan20th</p></li>
      <li class="complete"><a href="#"><strong>Sara consel</strong></a> purchased code at lara.com <p>Feb 6th</p></li>
      <li class="incomplete"><a href="#"><strong>Mad max</strong></a> purchased code at lara.com <p>jan20th</p></li>
      <li class="complete"><a href="#"><strong>Yoto Dira</strong></a> purchased code at lara.com <p>jan20th</p></li>
      <li class="incomplete"><a href="#"><strong>Sam Richards</strong></a> purchased code at lara.com <p>jan20th</p></li>
      <li class="complete"><a href="#"><strong>Henry</strong></a> purchased code at lara.com <p>jan20th</p></li>
      <li class="incomplete"><a href="#"><strong>Paris hilton</strong></a> purchased code at lara.com <p>jan20th</p></li>
      <li class="incomplete"><a href="#"><strong>Timp</strong></a> purchased code at lara.com <p>jan20th</p></li>
      <li class="incomplete"><a href="#"><strong>mark zukerburg</strong></a> purchased code at lara.com <p>jan20th</p></li>              
    </ul>
  </div>          
</div>
<!-- col-md-3 -->
@endsection

@section('scripts')

@endsection