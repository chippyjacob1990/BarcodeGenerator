<?php

namespace Drupal\sessions_core\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\sessions_core\barcode_generator;

/**
 * Count the number of proposed sessions and show it in a block.
 *
 * @Block(
 *   id = "barcode_block",
 *   admin_label = @Translation("Barcode Image"),
 *   category = @Translation("Custom")
 * )
 */
class BarCodeBlock extends BlockBase {

    public function build() {
        $data = 'HELLO WORLD';
        $options = 'sf=8';
        $symbology = 'qr';
        $format = 'svg';
        $generator = new barcode_generator();
        
        /* Create bitmap image. */
        $generator->output_image($format, $symbology, $data, $options);

      }

}
