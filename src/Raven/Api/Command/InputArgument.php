<?php

namespace Raven\Api\Command;

interface InputArgument
{
    const REQUIRED = 1;
    const OPTIONAL = 2;
    const IS_ARRAY = 4;
}
