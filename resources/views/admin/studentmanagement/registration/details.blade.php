<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>The Details About {{ $details->student->name }}</title>
    <style>
        .clearfix:after {
  content: "";
  display: table;
  clear: both;
}

a {
  color: #5D6975;
  text-decoration: underline;
}

body {
  position: relative;
  width: 21cm;  
  margin: 0 auto; 
  color: #001028;
  background: #FFFFFF; 
  font-family: Arial, sans-serif; 
  font-size: 12px; 
  font-family: Arial;
}

header {
  padding: 10px 0;
  margin-bottom: 30px;
}

#logo {
  text-align: center;
  margin-bottom: 10px;
}

#logo img {
  width: 90px;
}

h1 {
  border-top: 1px solid  #5D6975;
  border-bottom: 1px solid  #5D6975;
  color: #5D6975;
  font-size: 2.4em;
  line-height: 1.4em;
  font-weight: normal;
  text-align: center;
  margin: 0 0 20px 0;
  background: url({{ asset('public/images/pdf/dimension.png') }});
}

#project {
    width: 30%;
    float: right;
}
#project span {
  color: #5D6975;
  text-align: right;
  width: 52px;
  margin-right: 10px;
  display: inline-block;
  font-size: 0.8em;
}

#company {
    width: 50%;
    float: left;
}
#project div,
#company div {
  white-space: nowrap;        
}

table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    margin-bottom: 30px;
    border-bottom: dashed 1px #a2a2a2;
}

table tr:nth-child(2n-1) td {
  background: #F5F5F5;
}

table th,
table td {
  text-align: center;
}

table th {
  padding: 5px 20px;
  color: #5D6975;
  border-bottom: 1px solid #C1CED9;
  white-space: nowrap;        
  font-weight: normal;
}

table .service,
table .desc {
  text-align: left;
}

table td {
    padding: 12px;
    text-align: right;
}

table td.service,
table td.desc {
  vertical-align: top;
}

table td.unit,
table td.qty,
table td.total {
  font-size: 1.2em;
}

table td.grand {
  border-top: 1px solid #5D6975;;
}

#notices .notice {
  color: #5D6975;
  font-size: 1.2em;
}

footer {
    color: #5D6975;
    width: 40%;
    float: right;
    right: 0;
    border-top: 1px solid #C1CED9;
    padding: 8px 0;
    text-align: center;
}
#company,#project {
    display: inline-block;
    vertical-align: top;
}
    </style>
    {{-- <link rel="stylesheet" href="style.css" media="all" /> --}}
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img style="width:70px" src="{{ asset('public/images/pdf/logo.png') }}">
      </div>
      <h1>INVOICE 3-2-1</h1>
      <div class="company_desc">
        <div id="company" class="clearfix">
          <div>Company Name</div>
          <div>455 Foggy Heights,<br /> AZ 85004, US</div>
          <div>(602) 519-0450</div>
          <div><a href="mailto:company@example.com">company@example.com</a></div>
        </div>
        <div id="project">
          <div><span>PROJECT</span> Website development</div>
          <div><span>CLIENT</span> John Doe</div>
          <div><span>ADDRESS</span> 796 Silver Harbour, TX 79273, US</div>
          <div><span>EMAIL</span> <a href="mailto:john@example.com">john@example.com</a></div>
          <div><span>DATE</span> August 17, 2015</div>
          <div><span>DUE DATE</span> September 17, 2015</div>
        </div>
      </div>
      
    </header>
    <main>
      <h1> The information of {{ $details->student->name }} </h1>
      <table>
        
        <tbody>
          <tr>
            <td class="service" >Name : {{ $details->student->name }} </td>
            <td class="value" > 
              <img style="    width: 70px;height: 70px; border-radius: 13px;;" src="{{ asset('public/backend/images/student/'.$details->student->image) }}">
             </td>
          </tr>
          <tr>
            <td class="service">Father name </td>
            <td class="value"> {{ $details->student->father_name }} </td>
          </tr>
          <tr>
            <td class="service">Mother name </td>
            <td class="value"> {{ $details->student->mother_name }} </td>
          </tr>
          <tr>
            <td class="service">Mobile Number </td>
            <td class="value"> {{ $details->student->mobile }} </td>
          </tr>
          
          <tr>
            <td class="service">Class </td>
            <td class="value"> {{ $details->classes->class_name }} </td>
          </tr>
          <tr>
            <td class="service">Year </td>
            <td class="value"> {{ $details->classes->class_name }} </td>
          </tr>
          <tr>
            <td class="service">Religion </td>
            <td class="value"> {{ $details->student->religion }} </td>
          </tr>
          <tr>
            <td class="service">Gender </td>
            <td class="value"> {{ $details->student->gender }} </td>
          </tr>
          <tr>
            <td class="service">Id No  </td>
            <td class="value"> {{ $details->student->id_no }} </td>
          </tr>
          <tr>
            <td class="service"> Date Of Birth  </td>
            <td class="value"> {{ $details->student->date_of_birth }} </td>
          </tr>
          <tr>
            <td class="service"> Group   </td>
            <td class="value"> {{ $details->student->group }} </td>
          </tr>
          <tr>
            <td class="service"> Shift   </td>
            <td class="value"> {{ $details->shift->shift }} </td>
          </tr>
          <tr>
            <td class="service"> Discount   </td>
            <td class="value"> {{ $details->discount->discount }} </td>
          </tr>

        </tbody>
        
      </table>
      <div id="notices">
        <div>Print Date </div>
        <div class="notice">{{ date('D-M-Y') }}</div>
      </div>
    </main>
    <footer>
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>
  </body>
</html>