<?php extract(collect($attributes->getAttributes())->mapWithKeys(function ($value, $key) { return [Illuminate\Support\Str::camel(str_replace([':', '.'], ' ', $key)) => $value]; })->all(), EXTR_SKIP); ?>
@props(['color','disabled','form','formId','href','icon','iconSize','keyBindings','labelSrOnly','tag','target','tooltip','type','wire:click','wire:target','xOn:click','class','badge','badgeColor','iconPosition','size','badgeColor','iconPosition'])
<x-filament::link :color="$color" :disabled="$disabled" :form="$form" :form-id="$formId" :href="$href" :icon="$icon" :icon-size="$iconSize" :key-bindings="$keyBindings" :label-sr-only="$labelSrOnly" :tag="$tag" :target="$target" :tooltip="$tooltip" :type="$type" :wire:click="$wireClick" :wire:target="$wireTarget" :x-on:click="$xOnClick" :class="$class" :badge="$badge" :badgeColor="$badgeColor" :iconPosition="$iconPosition" :size="$size" :badge-color="$badgeColor" :icon-position="$iconPosition" >

{{ $slot ?? "" }}
</x-filament::link>