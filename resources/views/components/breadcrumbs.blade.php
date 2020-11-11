
            <div class="breadcrumb">

                <img src="{!! $img ?? '' !!}" alt="{{ $title }}" class="breadcrumb__img">

                <div class="container">
                    <div class="breadcrumb__inner">
                       <h1 class="breadcrumb__title">{{ $title ?? '' }}</h2>
            
            
                        <ul class="breadcrumb__list" itemscope itemtype="https://schema.org/BreadcrumbList">
                            <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                <a class="breadcrumb__link" href="{{ url('/') }}" title="{{ $parent }}" itemprop="item">
                                    <span itemprop="name">{{ $parent }}</span>
                                    <meta itemprop="position" content="0">
                                </a></li>
            
            
            
                            @if($prev ?? '')
            
            
                                <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <a class="breadcrumb__link" href="{{ $link }}" title="{{ $prev ?? ''}}" itemprop="item">
                                        <span itemprop="name">{{ $prev ?? ''}}</span>
                                        <meta itemprop="position" content="1">
                                    </a></li>
            
                                <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <a class="breadcrumb__link breadcrumb__link--active" href="" title="{{ $active }}" itemprop="item">
                                        <span itemprop="name">{{ $active }}</span>
                                        <meta itemprop="position" content="2">
                                    </a>
                                </li>
            
                            @else
                                <li class="breadcrumb__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                                    <a class="breadcrumb__link breadcrumb__link--active" href="{{ $activelink }}" title="{{ $active }}" itemprop="item">
                                        <span itemprop="name">{{ $active }}</span>
                                        <meta itemprop="position" content="1">
                                    </a>
                                </li>
                            @endif
            
            
                        </ul>
            
            
                    </div>
                </div>
            
               
            </div>


