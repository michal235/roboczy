import 'expose-loader?$!expose-loader?jQuery!jquery';
import VueSection from "./functions/VueSection";

window.onload = function() {

    VueSection.init();
};
