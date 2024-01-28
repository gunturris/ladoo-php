@include('layout.header')

<!-- main content area start -->
<div class="main-content">
            @include('layout.headarea')

            <div class="main-content-inner">
<!-- table primary start -->
<div class="col-lg-12 mt-5">
    <div class="card">
        <div class="card-body"> 
            <div class="data-table">
                

            <div class=" dataTables_wrapper">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">



                            <div class="dataTables_filter">  
                                <div class="float-left col-md-2" style=" font-size:17px;height:32px;vertical-text-align:bottom;padding-top:8px;"> Search </div>
                                <div class="float-left col-md-6"> <input type="search" class="form-control form-control-sm" style="width:100%" placeholder="" aria-controls="dataTable"> </div> 
                                <div class="float-left col-md-2"> <button style="padding: 3px 25px;"> GO </button> </div> 
  
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_length" id="dataTable2_length">
                                <div class="float-right col-md-12">
                                    <div style="width:100%; text-align:right;padding-bottom:5px;">  
                                    <button style="padding: 3px 25px;"> Excel </button>  
                                    <button style="padding: 3px 25px;"> Add data </button> 
                                    </div>
                                </div> 
                            </div>
                        </div>
                </div>





                    <table class="table text-center">
                        <thead class="text-uppercase bg-primary">
                            <tr class="text-white">
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">date</th>
                                <th scope="col">price</th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>09 / 07 / 2018</td>
                                <td>$120</td>
                                <td><i class="ti-trash"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>jone</td>
                                <td>09 / 07 / 2018</td>
                                <td>$150</td>
                                <td><i class="ti-trash"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>09 / 07 / 2018</td>
                                <td>$120</td>
                                <td><i class="ti-trash"></i></td>
                            </tr>
                            <tr>
                                <th scope="row">1</th>
                                <td>jone</td>
                                <td>09 / 07 / 2018</td>
                                <td>$150</td>
                                <td><i class="ti-trash"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>


                <div class="row"> 
                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous disabled" id="dataTable_previous">
                                    <a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                </li>
                                <li class="paginate_button page-item active">
                                    <a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                </li>
                                <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                <li class="paginate_button page-item next" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li>
                            </ul></div>
                        </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- table primary end -->

</div>

@include('layout.footer')