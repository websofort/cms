@php
    $service = getContent('hourly_price.content', true);
    $chooseUsElements = getContent('hourly_price.element', false, 6);
@endphp
    <!-- ==================== Service Start Here ==================== -->
<section class="service-area section-bg py-80" style="background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url('{{ getImage(getFilePath('hourly_price') . '/' . @$service->data_values->hourly_price_background) }}'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="section-heading text-center">
                    <h2 class="section-heading__title">{{ __( @$service->data_values->heading ) }}</h2>
                    <p class="section-heading__desc">{{ __( @$service->data_values->sub_heading ) }}</p>
                </div>
            </div>
        </div>
        <div class="accordion d-flex justify-content-between flex-wrap gap-3" id="chooseUsAccordion">
            @foreach ($chooseUsElements as $index => $item)
                <div class="accordion-item">
                    <div
                        class="accordion-title"
                        onclick="toggleAccordion({{ $index }})"
                    >
                        <span id="icon-{{ $index }}">+</span>
                        <span style="flex-grow: 1; text-align: left; margin-left: 10px;">
                        {{ __( @$item->data_values->title ) }}
                    </span>
                    </div>
                    <div
                        id="content-{{ $index }}"
                        class="accordion-content"
                    >
                        {{ __( @$item->data_values->description ) }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>



<script>
    function toggleAccordion(index) {
        const allContents = document.querySelectorAll(".accordion-content"); // Select all accordion contents
        const allIcons = document.querySelectorAll(".accordion-title span:first-child"); // Select all accordion icons

        // Iterate through all content areas
        allContents.forEach((content, i) => {
            const icon = allIcons[i];

            if (i === index) {
                // Toggle current accordion
                if (content.classList.contains("open")) {
                    content.classList.remove("open");
                    icon.textContent = "+"; // Collapse icon
                } else {
                    content.classList.add("open");
                    icon.textContent = "-"; // Expand icon
                }
            } else {
                // Collapse all other accordions
                content.classList.remove("open");
                icon.textContent = "+"; // Reset icon for other accordions
            }
        });
    }
</script>
