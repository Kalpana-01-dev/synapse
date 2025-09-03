

<div class="container-fluid my-4">
    <div class="row g-4">

        <div class="col-md-3">
            <div class="sidebar">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5>Categories</h5>
                    <span class="reset-btn">Reset All</span>
                </div>
                   <div class="accordion" id="categoriesAccordion">
                    
                    @foreach($sidebarData as $key=>$val)
                    @php 
                        $details = $val['categories'];
                    @endphp 
                    
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne_{{$key}}" aria-expanded="false" aria-controls="flush-collapseOne">
                                    {{$val['name']}}
                                </button>
                            </h2>
                            


                                <div id="flush-collapseOne_{{$key}}" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample_{{$key}}">        
                                <div class="accordion-body">
                                    @foreach($details as $key2=>$val2)
                                        <div class="d-flex align-items-center">
                                                <input type="checkbox" name="" id="" class="form-check-input">
                                                <p>
                                                    <span>{{$val2['name']}} </span>
                                                    <span>({{$val2['report_count']}} reports)</span>
                                                </p>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                        </div>

                        @endforeach

                   </div>
            </div>
        </div>

    </div>
</div>