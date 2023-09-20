<style>
    .apexcharts{
       width: auto;
    }
    .apexcharts-xaxis-label {
        font-size: 15px; 
    }.apexcharts-yaxis-label{
        width: auto;
        font-size: 16px;
    }.apexcharts-title-text{
        font-size: 30px;
        text-align: center;
    }.apexcharts-yaxis-texts-g{
        border-width: 20;
    } 
</style>

<div >

    <div class="bg-white rounded" style="padding: 10px">
        {!! $chart->container() !!}
    </div>

</div>

<script src="{{ $chart->cdn() }}"></script>

{{ $chart->script() }}

