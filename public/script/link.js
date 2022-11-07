$(document).ready(function(){
    let zindex = 10;

    $("div.card").on('click', function(e){
        // e.preventDefault();

        let isShowing = false;

        if ($(this).hasClass("d-card-show")) {
            isShowing = true
        }

        let dashboard_cards = $("div.dashboard-cards")
        if (dashboard_cards.hasClass("showing")) {
            // a card is already in view
            $("div.card.d-card-show").removeClass("d-card-show");

            if (isShowing) {
                // this card was showing - reset the grid
                dashboard_cards.removeClass("showing");
            } else {
                // this card isn't showing - get in with it
                $(this).css({zIndex: zindex}).addClass("d-card-show");

            }

            zindex++;

        } else {
            // no dashboard-cards in view
            dashboard_cards.addClass("showing");
            $(this).css({zIndex:zindex}).addClass("d-card-show");

            zindex++;
        }

    });
});
