<div class="row msearch2 catalog-content" id="mse2_mfilter">
    <div id="filter" class="filter-catalog">
    	<form action="" method="post" id="mse2_filters" class="catalog-filter">
    	    <div class="container">
    	        {$filters}
    	        
    	        [[+filters:isnot=``:then=`
    				<button type="reset" class="filter-reset btn btn-default hidden" style="display: none">Очистить все фильтры</button>
    			`]]
			
                
	        </div>
    	</form>
	    <div id="mse2_selected_wrapper" class="filter">
    	    <div class="container filter-wrapper">
    			<div id="mse2_selected" class="filter_selected">
    			</div>
    		</div>
    	</div>
	</div>
    <div class="container">
    	<div id="mse2_results" class="filter-result">
            {$results}
    	</div>
    	
    	<div id="mse2_pagination">
    	    {'page.nav' | placeholder}
    	</div>
	</div>
</div>





