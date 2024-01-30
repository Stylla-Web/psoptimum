<div class="col-12 col-sm-12 col-md-12 col-lg-12">
    <div class="spr-header clearfix d-flex-center justify-content-between">
        <div class="product-review d-flex-center me-auto">
            <product-rating :rating-percent="ratingPercent"
                            :review-count="totalReviews"></product-rating>
        </div>
        <div class="spr-summary-actions mt-3 mt-lg-0">
            <a href="#" class="spr-summary-actions-newreview write-review-btn btn rounded">
                <i class="icon an-1x an an-pencil-alt me-2"></i>{{ trans('storefront::product.add_a_review') }}</a>
        </div>
    </div>

    <form @submit.prevent="addNewReview" @input="errors.clear($event.target.name)"
          class="product-review-form new-review-form mb-4">
        <h4 class="spr-form-title text-uppercase">{{ trans('storefront::product.add_a_review') }}</h4>
        <fieldset class="spr-form-contact">
            <div class="spr-form-contact-name form-group">
                <label class="spr-form-label" for="nickname">
                    {{ trans('storefront::product.review_form.name') }} <span class="required">*</span>
                </label>
                <input class="spr-form-input spr-form-input-text"
                       type="text" name="reviewer_name" v-model="reviewForm.reviewer_name" id="nickname"
                       placeholder="John smith" required/>
                <span class="error-message" v-if="errors.has('reviewer_name')"
                      v-text="errors.get('reviewer_name')"></span>
            </div>
            <div class="spr-form-review-rating form-group">
                <label class="spr-form-label">{{ trans('storefront::product.review_form.your_rating') }}</label>
                <div class="product-review pt-1">
                    <div class="rating-input">
                        <input type="radio" name="rating" v-model="reviewForm.rating" id="star-5" value="5">
                        <label for="star-5" title="5 star">
                            <i class="las la-star"></i>
                        </label>

                        <input type="radio" name="rating" v-model="reviewForm.rating" id="star-4" value="4">
                        <label for="star-4" title="4 star">
                            <i class="las la-star"></i>
                        </label>

                        <input type="radio" name="rating" v-model="reviewForm.rating" id="star-3" value="3">
                        <label for="star-3" title="3 star">
                            <i class="las la-star"></i>
                        </label>

                        <input type="radio" name="rating" v-model="reviewForm.rating" id="star-2" value="2">
                        <label for="star-2" title="2 star">
                            <i class="las la-star"></i>
                        </label>

                        <input type="radio" name="rating" v-model="reviewForm.rating" id="star-1" value="1">
                        <label for="star-1" title="1 star">
                            <i class="las la-star"></i>
                        </label>
                    </div>
                </div>

                <span class="error-message" v-if="errors.has('rating')" v-text="errors.get('rating')"></span>
            </div>
            <div class="spr-form-review-body form-group">
                <label class="spr-form-label" for="message">
                    {{ trans('storefront::product.review_form.comment') }}
                    {{--                                <span class="spr-form-review-body-charactersremaining">(1500) characters remaining</span>--}}
                </label>
                <div class="spr-form-input">
                        <textarea class="spr-form-input spr-form-input-textarea"
                                  name="comment" v-model="reviewForm.comment" id="comment"
                                  rows="5" placeholder="Write your comments here"></textarea>
                </div>
                <span class="error-message" v-if="errors.has('comment')" v-text="errors.get('comment')"></span>
            </div>
            <div class="spr-form-review-title form-group row">
                <div class="col-6">
                    @captcha
                </div>
                <div class="col-6">
                    <input type="text" name="captcha" v-model="reviewForm.captcha"
                           class="spr-form-input spr-form-input-text"
                           placeholder="{{ trans('storefront::layout.enter_captcha_code') }}">
                </div>
                <span class="error-message" v-if="errors.has('captcha')" v-text="errors.get('captcha')"></span>
            </div>
        </fieldset>
        <div class="spr-form-actions clearfix">
            <input type="submit"
                   class="btn btn-primary rounded spr-button spr-button-primary"
                   value="Submit Review">
        </div>
    </form>
</div>

<div class="col-12 col-sm-12 col-md-12 col-lg-12">
    <div class="spr-reviews">
        <h4 class="spr-form-title text-uppercase mb-3">
            Customer Reviews
        </h4>
        <div class="review-inner" :class="{ loading: fetchingReviews }">
            <div class="empty-message" v-if="emptyReviews">
                <svg xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 500 500"
                     preserveAspectRatio="xMidYMid meet">
                    <path d="M226.53,300a10.1,10.1,0,1,0,3,7.14,10.15,10.15,0,0,0-3-7.14Zm0,0"/>
                    <path
                        d="M219.32,280.5a10,10,0,0,1-3.19-.43c-4.41-1.4-5-5.74-5.3-9.09v-.11c-2.54-28.07-4.18-56.14-6.71-84.21-.18-2-.34-4.12.73-5.94a10.13,10.13,0,0,1,3.83-4c3.16-1.9,6.65-3.83,10.59-3.84s7.25,1.8,10.35,3.61a10.13,10.13,0,0,1,4.6,4.89,9.21,9.21,0,0,1,.37,4.66c-2.56,28.56-4.24,57.11-6.8,85.66a11.09,11.09,0,0,1-1.53,5.57C224.87,279.27,222.1,280.42,219.32,280.5Z"/>
                    <path
                        d="M382.92,118.81l-168.17,0q-60.94,0-121.87,0-10.23,0-20.48,0h-24c-22.18,0-41.58,19-41.62,40.93q-.15,88.1,0,176.18c0,20.66,16.7,39.23,37.25,40.86,11.79.94,23.71.41,35.56.53,1.71,0,3.42,0,5.47,0v69l1.16.58c1.06-1.22,2-2.53,3.2-3.68,20.6-20.7,41.27-41.35,61.8-62.13l.16-.16a14.24,14.24,0,0,1,2.42-2,11.17,11.17,0,0,1,6.3-1.67q111.21.15,222.44.06c27.06,0,45.13-18.1,45.13-45.19v-41q0-63.81,0-127.63C427.66,137.19,409.34,118.81,382.92,118.81Zm24.23,213c0,16-9,25-25.1,25q-103.18,0-206.35-.06-12,0-24.06,0c-.32,0-.62,0-.93,0a11.18,11.18,0,0,0-8,3.7c-12,12.26-24.24,24.34-37.23,37.34V357.08c-1.8-.08-3.36-.21-4.93-.21q-24.69,0-49.37,0c-14.85,0-24-9.28-24-24.18q0-84.72,0-169.46c0-14.62,9.25-23.93,23.81-23.93H383.26c14.44,0,23.88,9.48,23.89,24Z"/>
                    <path
                        d="M493.34,97.83c0-26.34-18.3-44.72-44.72-44.72l-168.17,0q-83.2,0-166.39,0c-22.17,0-41.58,19-41.62,40.93,0,8.25,0,16.5,0,24.76q0,10.23,0,20.46h20.5V97.52c0-14.62,9.25-23.93,23.81-23.93H449c14.44,0,23.88,9.48,23.89,24V266.14c0,16-9,25-25.1,25h-40.6v20.48h41c27.06,0,45.13-18.1,45.13-45.19Q493.32,182.14,493.34,97.83ZM153.75,379c.43-.49.86-1,1.32-1.44q10.31-10.36,20.63-20.71-12,0-24.06,0c-.32,0-.62,0-.93,0v23.81l.62.31Z"/>
                </svg>

                <h4>{{ trans('storefront::product.be_the_first_one_to_review_this_product') }}</h4>
            </div>
            <div class="spr-review" v-for="review in reviews.data" v-else>
                <div class="spr-review-header">
                        <span class="product-review spr-starratings">
                            <product-rating :rating-percent="review.rating_percent"></product-rating>
                        </span>
                    <h5 class="spr-review-header-title mt-1" v-text="review.reviewer_name">
                    </h5>
                    <span class="spr-review-header-byline" v-if="review.is_approved">
                            On <strong v-text="review.created_at_formatted"></strong>
                        </span>
                    <span class="spr-review-header-byline" v-else>
                            {{ trans("review::messages.submitted_for_approval") }}
                        </span>
                </div>
                <div class="spr-review-content">
                    <p class="spr-review-content-body" v-text="review.comment">

                    </p>
                </div>
            </div>
        </div>
        <v-pagination
            :total-page="totalReviewPage"
            :current-page="currentReviewPage"
            @page-changed="changeReviewPage"
            v-if="totalReviews > 4"
        >
        </v-pagination>
    </div>
</div>
