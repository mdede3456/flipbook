   <div class="search-overlay">
        <div class="container wrapper-search">
            <div class="search-top">
                <h2>Cari Sesuatu Disini ?</h2>
                <div class="close-search"><i class="icon_close"></i></div>
            </div>
            <form role="search" method="GET" class="search-from ajax-search" action="{{route('global.search')}}"  >
                <div class="search-box"> 
                    <button id="searchsubmit" class="btn" type="submit"> 
                        <i class="fa fa-search"></i>  
                    </button> 
                    <input type="text" value="" name="name" class="input-search s" placeholder="Cari..." />
                    <div class="result-search-products-content">
                        <ul class="result-search-products"></ul>
                    </div>
                </div> <input type="hidden" name="post_type" value="product" />
            </form>
        </div>
    </div>