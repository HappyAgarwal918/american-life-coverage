<!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<style type="text/css">
    .card-box {
    background: #fff;
    min-height: 50px;
    box-shadow: none;
    position: relative;
    margin-bottom: 20px;
    transition: .5s;
    border: 1px solid #f2f2f2;
    border-radius: 10px;
}
.card-box:hover {
    -webkit-transform: translateY(-6px);
    transform: translateY(-6px);
    -moz-box-shadow: 0 20px 20px rgba(0,0,0,.1);
    webkit-box-shadow: 0 0 25px -5px #9e9c9e;
    box-shadow: 0 0 25px -5px #9e9c9e;
}
.card-body {
    position: relative;
    padding: 2% 3%;
    text-align: justify;
}
.card-body:before,
.card-body:after {
    content: " ";
    display: table;
}
.card-body:after {
    clear: both;
}
.card-body:last-child {
    border-radius: 0 0 2px 2px;
}
.card-body.table-responsive {
    margin: 0;
}

#restu_table span.activee {
    background: #28b66e;
    color: white;
    padding: 5px;
    font-size: 0.875rem;
    font-weight: bold;
}
#restu_table span.unpaid {
    background: #f0ad4e;
    color: white;
    padding: 5px;   
    font-size: 0.875rem;
    font-weight: bold;
}
div#restu_table_wrapper {
    padding-bottom: 40px;
}
#restu_table{
    border: 1px solid #383ebf;
}
#restu_table thead{
    background-color: #383ebf;
}
table.dataTable thead th, table.dataTable tbody td {
    padding: 15px 10px;
    overflow: auto;
}

table.dataTable thead th.sorting{
    color: white;
}

#restu_table_filter label {
    margin-bottom: 30px;
    display: flex;
    align-items: center;
}
#restu_table_filter label input{
    margin-left: 5%;
}
div#restu_table_length {
display: none;
}
a#manage {
    color: black;
}

@media(min-width: 540px){
    .create_new{
        position: absolute;
        margin: 0px;
    }
    div#restu_table_filter, div#restu_table_paginate {
      float: right;
    }
}
@media(max-width: 767px) {
  
  /* Force table to not be like tables anymore */
  table, thead, tbody, th, td, tr {
    display: block;
    overflow: auto;
  }
  /* Hide table headers (but not display: none;, for accessibility) */
  thead tr, tfoot tr {
    display: none;
  }
  
  .table td:nth-child(1) {
      background: #ccc;
  }

  .nav-tabs{
    flex-direction: column;
  }
}
</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto sm:px-6 lg:px-8">
            @yield('admincontent')
        </div>
    </div>
</x-app-layout>
<script src="{{ asset('asset/js/jquery-3.4.1.js')}}"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<!-- Data Table -->
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
<!-- data Table -->
<script type="text/javascript">
    $(document).ready(function() {
        $('.restu_table').DataTable();
    });
</script>
