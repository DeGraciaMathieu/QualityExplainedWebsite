<?php

exec('bundler exec jekyll _3.6_ build');
exec('git commit -a -m "update"');
exec('git push');