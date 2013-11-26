/**
 * Profile presentation JS
 *
 * @param context
 */

Drupal.behaviors.profileBehaviors = function(context) {

    // Show hide "Become available" date based on whether
    // currently unavailable is checked or not
    if (!$('#edit-notcurrentlyavailable').is(':checked')) {
        $("#edit-becomeavailable-wrapper").hide();
    }
    $('#edit-notcurrentlyavailable').click(function () {
        $("#edit-becomeavailable-wrapper").toggle(this.checked);
    });
}
