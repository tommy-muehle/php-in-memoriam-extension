PHP_ARG_ENABLE(in_memoriam,
  [Whether to enable the "In memoriam" extension],
  [  --enable-in-memoriam        Enable "in memoriam" extension support])

if test $PHP_IN_MEMORIAM != "no"; then
  PHP_SUBST(IN_MEMORIAM_SHARED_LIBADD)
  PHP_NEW_EXTENSION(in_memoriam, in_memoriam.c, $ext_shared)
fi
