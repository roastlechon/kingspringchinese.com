require("jquery");
require("angular");
require("angular-strap");
require("angular-ui-router");
require("angular-scroll");

angular.module("app", [
	"mgcrea.ngStrap",
	"ui.router",
	"duScroll"
])
.config(["$stateProvider", "$urlRouterProvider", "$locationProvider", AppConfig]);

function AppConfig ($stateProvider, $urlRouterProvider, $locationProvider) {
	console.log("Configuring module.");
}