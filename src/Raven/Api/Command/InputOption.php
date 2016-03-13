<?php

namespace Raven\Api\Command;

interface InputOption
{
    const VALUE_NONE = 1;
    const VALUE_REQUIRED = 2;
    const VALUE_OPTIONAL = 4;
    const VALUE_IS_ARRAY = 8;
}
