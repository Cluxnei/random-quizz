<svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="lds-dice"><g style="transform:scale(0.7); transform-origin: 50px 50px" id="alternative-animate"><g><rect x="10" y="10" width="80" height="80" ng-attr-stroke="#222222" ng-attr-fill="#f9f9f9" ng-attr-stroke-width="5" stroke="#222" fill="#f9f9f9" stroke-width="5"></rect></g><g><rect x="10" y="10" width="80" height="80" ng-attr-stroke="#222222" ng-attr-fill="#f9f9f9" ng-attr-stroke-width="5" stroke="#222" fill="#f9f9f9" stroke-width="5"></rect></g><g><rect x="10" y="10" width="80" height="80" ng-attr-stroke="#222222" ng-attr-fill="#f9f9f9" ng-attr-stroke-width="5" stroke="#222" fill="#f9f9f9" stroke-width="5"></rect></g><g><rect x="10" y="10" width="80" height="80" ng-attr-stroke="#222222" ng-attr-fill="#f9f9f9" ng-attr-stroke-width="5" stroke="#222" fill="#f9f9f9" stroke-width="5"></rect></g><g><circle cx="50" cy="50" r="10" ng-attr-fill="#ee3311" stroke-width="0" fill="#ee3311"></circle></g><g><circle cx="30" cy="30" r="6" ng-attr-fill="#222222" stroke-width="0" fill="#222222"></circle><circle cx="70" cy="70" r="6" ng-attr-fill="#222222" stroke-width="0" fill="#222222"></circle></g><g><circle cx="30" cy="30" r="6" ng-attr-fill="#222222" stroke-width="0" fill="#222222"></circle><circle cx="70" cy="70" r="6" ng-attr-fill="#222222" stroke-width="0" fill="#222222"></circle><circle cx="30" cy="70" r="6" ng-attr-fill="#222222" stroke-width="0" fill="#222222"></circle><circle cx="70" cy="30" r="6" ng-attr-fill="#222222" stroke-width="0" fill="#222222"></circle><circle cx="30" cy="50" r="6" ng-attr-fill="#222222" stroke-width="0" fill="#222222"></circle><circle cx="70" cy="50" r="6" ng-attr-fill="#222222" stroke-width="0" fill="#222222"></circle></g><g><circle cx="30" cy="30" r="6" ng-attr-fill="#222222" stroke-width="0" fill="#222222"></circle><circle cx="70" cy="70" r="6" ng-attr-fill="#222222" stroke-width="0" fill="#222222"></circle><circle cx="30" cy="70" r="6" ng-attr-fill="#222222" stroke-width="0" fill="#222222"></circle><circle cx="70" cy="30" r="6" ng-attr-fill="#222222" stroke-width="0" fill="#222222"></circle><circle cx="50" cy="50" r="6" ng-attr-fill="#222222" stroke-width="0" fill="#222222"></circle></g></g>
<style type="text/css">
@keyframes lds-dice {
  0% {
    transform: rotateY(0deg);
    opacity: 1;
  }
  24% {
    opacity: 1;
  }
  25% {
    transform: rotateY(90deg);
    opacity: 0;
  }
  50% {
    transform: rotateY(180deg) rotateZ(180deg);
    opacity: 0;
  }
  74% {
    opacity: 0;
  }
  75% {
    transform: rotateY(270deg);
    opacity: 1;
  }
  100% {
    transform: rotateY(360deg);
    opacity: 1;
  }
}
@keyframes alternative{
    50%{
        transform: scale(0.4) rotateZ(180deg);
    }
}
.lds-dice g g {
  transform-origin: 50px 50px 40px;
}
.lds-dice g g:nth-child(1) {
  animation: lds-dice 2s linear infinite;
}
.lds-dice g g:nth-child(2) {
  animation: lds-dice 2s linear infinite;
  animation-delay: -0.5s;
}
.lds-dice g g:nth-child(3) {
  animation: lds-dice 2s linear infinite;
  animation-delay: -1s;
}
.lds-dice g g:nth-child(4) {
  animation: lds-dice 2s linear infinite;
  animation-delay: -1.5s;
}
.lds-dice g g:nth-child(5) {
  animation: lds-dice 2s linear infinite;
  animation-delay: 0;
}
.lds-dice g g:nth-child(6) {
  animation: lds-dice 2s linear infinite;
  animation-delay: -0.5s;
}
.lds-dice g g:nth-child(7) {
  animation: lds-dice 2s linear infinite;
  animation-delay: -1s;
}
.lds-dice g g:nth-child(8) {
  animation: lds-dice 2s linear infinite;
  animation-delay: -1.5s;
}
#alternative-animate{
    animation: alternative 5s linear infinite;
}
</style></svg>
