  <div class="container">
  
  <div class="">
        <div class="header">
            <h2>Key Data Points</h2>
        </div>
        
        <table>
            <thead>
                <tr>
                    <th class="metric-column">Metric</th>
                    <th class="value-column">Value</th>
                    <th class="insight-column">Key Insight</th>
                </tr>
            </thead>
            <tbody>
               @foreach($table as $key=>$val)
                <tr>
                    <td class="metric-column">{{$val['metric']}}</td>
                    <td class="value-column">{{$val['value']}}</td>
                    <td class="insight-column">{{$val['name']}}</td>
                </tr>
                @endforeach
                
                
            </tbody>
        </table>
    </div>

     


  @foreach($content as $key=>$val)
  
<div class="accordion" id="accordionExample{{$key}}">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne{{$key}}" aria-expanded="true" aria-controls="collapseOne{{$key}}">
         {{$val['heading']}}
      </button>
    </h2>
    <div id="collapseOne{{$key}}" class="accordion-collapse collapse show" data-bs-parent="#accordionExample{{$key}}">
      <div class="accordion-body">
           {!!$val['content'] !!}

      </div>
    </div>
  </div>
  </div>
 @endforeach 


  </div>