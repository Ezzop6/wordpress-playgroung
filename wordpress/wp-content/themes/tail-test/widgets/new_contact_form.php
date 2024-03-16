<?php
class My_Contact_Widget extends WP_Widget {
  public function __construct() {
    $widget_ops = array(
      'classname' => 'contact_form_widget',
      'description' => 'Displays contact information'
    );
    parent::__construct('my_contact_widget', 'Contact Information', $widget_ops);
  }

  // editing widget form in wp_admin
  public function form($instance) {
    $name = !empty($instance['name']) ? $instance['name'] : '';
    $email = !empty($instance['email']) ? $instance['email'] : '';
    $phone = !empty($instance['phone']) ? $instance['phone'] : '';
    $country = !empty($instance['country']) ? $instance['country'] : '';

    $id_name = esc_attr($this->get_field_id('name'));
    $id_email = esc_attr($this->get_field_id('email'));
    $id_phone = esc_attr($this->get_field_id('phone'));
    $id_country = esc_attr($this->get_field_id('country'));

    $field_name_name = esc_attr($this->get_field_name('name'));
    $field_name_email = esc_attr($this->get_field_name('email'));
    $field_name_phone = esc_attr($this->get_field_name('phone'));
    $field_name_country = esc_attr($this->get_field_name('country'));
?>
    <!-- wp_admin -->
    <h2>Contact</h2>
    <p>
      <label for="<?= $id_name ?>" ; ?>Name:</label>
      <input id="<?= $id_name ?>
      " name="<?= $field_name_name ?>
      " type="text" value="<?php echo esc_attr($name); ?>" />
    </p>
    <p>
      <label for="<?= $id_email ?>">Email:</label>
      <input id="<? $id_email ?>
      " name="<?= $field_name_email ?>
      " type="text" value="<?php echo esc_attr($email); ?>" />
    </p>
    <p>
      <label for="<?= $id_phone ?>">Phone:</label>
      <input id="<?= $id_phone ?>
      " name="<?= $field_name_phone ?>
      " type="number" value="<?php echo esc_attr($phone); ?>" />
    </p>
    <p>
      <label for="<?= $id_country ?>">Country:</label>
      <select id="<?= $id_country ?>
      " name="<?= $field_name_country ?>
      " value="<?php echo esc_attr($country); ?>">
        <option value=""></option>
        <option value="USA">USA</option>
        <option value="Canada">Canada</option>
        <option value="Mexico">Mexico</option>
        <option value="Czech">Czech</option>
      </select>
    </p>
<?php
  }


  // saving widget form
  public function update($new_instance, $old_instance) {
    $instance = array();
    $instance['name'] = (!empty($new_instance['name'])) ? strip_tags($new_instance['name']) : '';
    $instance['email'] = (!empty($new_instance['email'])) ? strip_tags($new_instance['email']) : '';
    $instance['phone'] = (!empty($new_instance['phone'])) ? strip_tags($new_instance['phone']) : '';
    $instance['country'] = (!empty($new_instance['country'])) ? strip_tags($new_instance['country']) : '';
    return $instance;
  }

  // show widget on the website
  public function widget($args, $instance) {
    echo $args['before_widget'];
    if (!empty($instance['name'])) {
      echo '<p>' . $instance['name'] . '</p>';
    }

    if (!empty($instance['email'])) {
      echo "<p>" . $instance['email'] . "</p>";
    }

    if (!empty($instance['phone'])) {
      echo "<p>" . $instance['phone'] . "</p>";
    }
    if (!empty($instance['country'])) {
      echo "<p>" . $instance['country'] . "</p>";
    }
    echo $args['after_widget'];
  }
}

function register_my_contact_widget() {
  register_widget('My_Contact_Widget');
}
