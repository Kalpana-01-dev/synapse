<div class="container">


    <!-- 1. Introduction -->
     @php  $i=0;  @endphp
    @foreach($data as $key=>$val)
     @php  $i++;  @endphp


  <div class="accordion" id="reportAccordion{{$key}}">
    <div class="accordion-item border-0">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button collapsed accordion-header" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne{{$key}}">
          {{$i}}. {{$val['heading']}}
        </button>
      </h2>
      <div id="collapseOne{{$key}}" class="accordion-collapse collapse {{$key==0  ? 'show' : ''}}" data-bs-parent="#reportAccordion{{$key}}">
        <div class="accordion-body">
            {!! $val['content']  !!}
        </div>
      </div>
    </div>
   </div>
    @endforeach

 
</div>