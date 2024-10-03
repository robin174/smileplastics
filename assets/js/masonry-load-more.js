jQuery(document).ready(function($) {
    // Initialize Masonry after all images are loaded
    var $grid = $('.grid').masonry({
        itemSelector: '.masonry-brick', // Each post should have this class
        percentPosition: true
    });

    $grid.imagesLoaded().progress(function() {
        $grid.masonry('layout');
    });

    var page = 1;  // Track current page for Load More

    $('#load-more-button').on('click', function(e) {
        e.preventDefault();
        
        $.ajax({
            url: ajax_loadmore.ajax_url,
            type: 'post',
            data: {
                action: 'loadmore_posts',  // WordPress action hook
                page: page,  // Pass current page
                nonce: ajax_loadmore.nonce  // Security nonce
            },
            beforeSend: function() { 
                $('#load-more-button').text('Loading...');  // Change button text
            },
            success: function(response) {
                if (response) {
                    // Append new posts to Masonry container
                    var $newItems = $(response);
                    $('.grid').append($newItems)
                                         .masonry('appended', $newItems);  // Add to Masonry layout

                    page++;  // Increment page number
                    $('#load-more-button').text('Load More');
                    
                    // Reinitialize Masonry for newly added items
                    $newItems.imagesLoaded(function() {
                        $grid.masonry('layout');
                    });
                } else {
                    $('#load-more-button').text('No more posts');  // No more posts
                    $('#load-more-button').prop('disabled', true);  // Disable button
                }
            }
        });
    });
});