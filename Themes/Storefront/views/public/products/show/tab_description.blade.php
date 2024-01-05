<div id="description"
     class="tab-pane fade description"
     role="tabpanel"
     aria-labelledby="description-tab"
     :class="{ 'show active': activeTab === 'description' }">
    {!! nl2br_save_html($product->description) !!}
</div>
