<?hh // strict
/*
 *  Copyright (c) 2004-present, Facebook, Inc.
 *  All rights reserved.
 *
 *  This source code is licensed under the BSD-style license found in the
 *  LICENSE file in the root directory of this source tree. An additional grant
 *  of patent rights can be found in the PATENTS file in the same directory.
 *
 */

namespace Facebook\GFM\Blocks;

use namespace HH\Lib\{C, Vec};

abstract class ContainerBlock extends Block {
  public function __construct(
    protected vec<Block> $children,
  ) {
  }

  final public function getChildren(): vec<Block> {
    return $this->children;
  }
}