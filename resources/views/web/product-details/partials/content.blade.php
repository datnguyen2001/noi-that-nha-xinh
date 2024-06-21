<ul class="tabs wc-tabs" role="tablist">
    <li class="description_tab active" id="tab-title-description" role="tab" aria-controls="tab-description">
        <a href="#tab-description">Mô tả</a>
    </li>
    <li class="tai_sao_chon_chung_toi_tab" id="tab-title-tai_sao_chon_chung_toi" role="tab" aria-controls="tab-tai_sao_chon_chung_toi">
        <a href="#tab-tai_sao_chon_chung_toi">Tại sao chọn chúng tôi</a>
    </li>
</ul>

<div id="tab-description" class="tab-content-detail active">
    {!! $productDetails->describe ?? '' !!}
</div>
<div id="tab-tai_sao_chon_chung_toi" class="tab-content-detail">
    {!! $productDetails->why_choose_us ?? '' !!}
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const tabs = document.querySelectorAll('.wc-tabs li');
        const contents = document.querySelectorAll('.tab-content-detail');

        tabs.forEach(tab => {
            tab.addEventListener('click', function(event) {
                event.preventDefault();

                // Remove active class from all tabs and content
                tabs.forEach(tab => tab.classList.remove('active'));
                contents.forEach(content => content.classList.remove('active'));

                // Add active class to the clicked tab and corresponding content
                tab.classList.add('active');
                const contentId = tab.querySelector('a').getAttribute('href').substring(1);
                document.getElementById(contentId).classList.add('active');
            });
        });
    });
</script>
<style>
    .tab-content-detail {
        display: none;
    }
    .tab-content-detail.active {
        display: block;
    }
    .tabs .active a {
        font-weight: bold;
    }
</style>
