/// <reference path="../utils.ts" />

module awk.grid {

    var _ = Utils;

    export class PopupService {

        static theInstance: PopupService;

        static getInstance() {
            if (!this.theInstance) {
                this.theInstance = new PopupService();
            }
            return this.theInstance;
        }

        ePopupParent: any;

        init(ePopupParent: any) {
            this.ePopupParent = ePopupParent;
        }

        positionPopup(eventSource: any, ePopup: any, minWidth: any) {
            var sourceRect = eventSource.getBoundingClientRect();
            var parentRect = this.ePopupParent.getBoundingClientRect();

            var x = sourceRect.left - parentRect.left;
            var y = sourceRect.top - parentRect.top + sourceRect.height;

            // if popup is overflowing to the right, move it left
            if (minWidth > 0) {
                var widthOfParent = parentRect.right - parentRect.left;
                var maxX = widthOfParent - minWidth;
                if (x > maxX) { // move position left, back into view
                    x = maxX;
                }
                if (x < 0) { // in case the popup has a negative value
                    x = 0;
                }
            }

            ePopup.style.left = x + "px";
            ePopup.style.top = y + "px";
        }

        //adds an element to a div, but also listens to background checking for clicks,
        //so that when the background is clicked, the child is removed again, giving
        //a model look to popups.
        addAsModalPopup(eChild: any) {
            var eBody = document.body;
            if (!eBody) {
                console.warn('ag-grid: could not find the body of the document, document.body is empty');
                return;
            }

            var popupAlreadyShown = _.isVisible(eChild);
            if (popupAlreadyShown) {
                return;
            }

            this.ePopupParent.appendChild(eChild);

            // if we add these listeners now, then the current mouse
            // click will be included, which we don't want
            setTimeout(function() {
                eBody.addEventListener('click', hidePopup);
                eChild.addEventListener('click', consumeClick);
            }, 0);

            var eventFromChild: any = null;

            var that = this;

            function hidePopup(event: any) {
                if (event && event === eventFromChild) {
                    return;
                }
                that.ePopupParent.removeChild(eChild);
                eBody.removeEventListener('click', hidePopup);
                eChild.removeEventListener('click', consumeClick);
            }

            function consumeClick(event: any) {
                eventFromChild = event;
            }

            return hidePopup;
        }
    }

}
