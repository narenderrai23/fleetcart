<div class="col-lg-3 col-md-6 col-sm-6">
    <div class="single-grid total-sales">
        <div>
            <span class="count" title="{{$totalSales->format()}}">{{ $totalSales->KMBTFormat() }}</span>

            <span class="title">{{ trans('admin::dashboard.total_sales') }}</span>
        </div>
        <div class="single-grid-icon">
            <svg xmlns="http://www.w3.org/2000/svg" id="Outline" viewBox="0 0 512 512" width="512" height="512">
                <path d="M488,144H440a8,8,0,0,0-8,8V456a8,8,0,0,0,8,8h48a8,8,0,0,0,8-8V152A8,8,0,0,0,488,144Zm-8,304H448V160h32Z"/>
                <path d="M408,464a8,8,0,0,0,8-8V216a8,8,0,0,0-8-8H360a8,8,0,0,0-8,8V456a8,8,0,0,0,8,8ZM368,224h32V448H368Z"/>
                <path d="M328,464a8,8,0,0,0,8-8V272a8,8,0,0,0-8-8H280a8,8,0,0,0-8,8V456a8,8,0,0,0,8,8ZM288,280h32V448H288Z"/>
                <path d="M248,464a8,8,0,0,0,8-8V336a8,8,0,0,0-8-8H200a8,8,0,0,0-8,8V456a8,8,0,0,0,8,8ZM208,344h32V448H208Z"/>
                <path d="M168,464a8,8,0,0,0,8-8V368a8,8,0,0,0-8-8H120a8,8,0,0,0-8,8v88a8,8,0,0,0,8,8Zm-40-88h32v72H128Z"/>
                <path d="M88,464a8,8,0,0,0,8-8V408a8,8,0,0,0-8-8H40a8,8,0,0,0-8,8v48a8,8,0,0,0,8,8ZM48,416H80v32H48Z"/>
                <path d="M216,144h16a8,8,0,0,0,0-16h-8v-8a8,8,0,0,0-16,0v9.376A24,24,0,0,0,216,176a8,8,0,0,1,0,16H200a8,8,0,0,0,0,16h8v8a8,8,0,0,0,16,0v-9.376A24,24,0,0,0,216,160a8,8,0,0,1,0-16Z"/>
                <path d="M488,48H440a8,8,0,0,0,0,16h28.686l-112,112H311.664c.219-2.639.336-5.306.336-8a96,96,0,1,0-113.677,94.362L164.687,296H104a8,8,0,0,0-5.657,2.343l-80,80a8,8,0,0,0,11.314,11.314L107.313,312H168a8,8,0,0,0,5.657-2.343l45.723-45.723A96.19,96.19,0,0,0,308.963,192H360a8,8,0,0,0,5.657-2.343L480,75.314V104a8,8,0,0,0,16,0V56A8,8,0,0,0,488,48ZM216,248a80,80,0,1,1,80-80A80.091,80.091,0,0,1,216,248Z"/>
            </svg>
        </div>
    </div>
</div>