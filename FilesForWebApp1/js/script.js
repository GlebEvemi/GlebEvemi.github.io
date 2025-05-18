import tabs from './modules/tabs';
import modal from './modules/modal';
import timer from './modules/itiner';
import cards from './modules/cards';
import calc from './modules/calc';
import forms from './modules/forms';
import slider from './modules/slider';
import {openModal} from './modules/modal';

window.addEventListener('DOMContentLoaded', function() {
    const modalTimerId = setTimeout(() => openModal('./modal', modalTimerId), 50000);

    tabs('.tabheader_item', '.tabcontent', '.tabheader_items', 'tabheader_item_active');
    modal('[data-modal]', '.modal', modalTimerId);
    timer('.timer', '2021-10-31');
    cards();
    calc();
    forms('form', modalTimerId);
    slider({
        container: '.offer_slider',
        slide: '.offer_slide',
        nextArrow: '.offer_slider-next',
        prevArrow: '.offer_slider-prev',
        totalCounter: '#total',
        currentCounter: '#current',
        wrapper: '.offer_slider-wrapper',
        field: '.offer_slider-inner'

        });

});