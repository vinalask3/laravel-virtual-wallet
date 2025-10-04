<?php

namespace Vinalask3\LaravelVirtualWallet\Traits;

use Vinalask3\LaravelVirtualWallet\Traits\ModelTrait;
use Vinalask3\LaravelVirtualWallet\Traits\VirtualWalletTrait;
use Vinalask3\LaravelVirtualWallet\Traits\WalletTransactionTrait;
use Vinalask3\LaravelVirtualWallet\Traits\PayTrait;
use Vinalask3\LaravelVirtualWallet\Traits\DepositTrait;

/**
 * Trait HasVirtualWallet
 *
 * This trait provides virtual wallet functionality to any Eloquent model.
 * It includes methods for managing wallets, handling transactions,
 * processing payments, and performing deposits.
 *
 * To use this, simply include the trait in your Eloquent model.
 *
 * Example:
 * ```
 * use HasVirtualWallet;
 * ```
 *
 * @package haxneeraj\laravel-virtual-wallet
 * @author Neeraj Saini
 * @email hax-neeraj@outlook.com
 * @github https://github.com/haxneeraj/
 * @linkedin https://www.linkedin.com/in/hax-neeraj/
 * @version 1.0.0
 * @license MIT
 */
trait HasVirtualWallet
{
    use ModelTrait;
    use VirtualWalletTrait;
    use WalletTransactionTrait;
    use PayTrait;
    use DepositTrait;
}
