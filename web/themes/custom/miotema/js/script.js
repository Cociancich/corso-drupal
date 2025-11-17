/**
 * API JS Drupal: https://www.drupal.org/docs/drupal-apis/javascript-api/javascript-api-overview
 */
console.log('No JS qua');
Drupal.behaviors.ciao = {
  attach: function (context, settings) {
    once('ciao', 'body').forEach(function (element) {
      console.log('Si JS qua', element);
    })
  }
}
