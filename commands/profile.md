# wp profile

Quickly identify what's slow with WordPress.

### EXAMPLES

    # See an overview for each stage of the load process.
    $ wp profile stage --fields=stage,time,cache_ratio
    +------------+---------+-------------+
    | stage      | time    | cache_ratio |
    +------------+---------+-------------+
    | bootstrap  | 0.7994s | 93.21%      |
    | main_query | 0.0123s | 94.29%      |
    | template   | 0.792s  | 91.23%      |
    +------------+---------+-------------+
    | total (3)  | 1.6037s | 92.91%      |
    +------------+---------+-------------+

    # Dive into hook performance for a given stage.
    $ wp profile stage bootstrap --fields=hook,time,cache_ratio --spotlight
    +--------------------------+---------+-------------+
    | hook                     | time    | cache_ratio |
    +--------------------------+---------+-------------+
    | muplugins_loaded:before  | 0.1767s | 33.33%      |
    | plugins_loaded:before    | 0.103s  | 78.13%      |
    | plugins_loaded           | 0.0194s | 19.32%      |
    | setup_theme              | 0.0018s | 75%         |
    | after_setup_theme:before | 0.0116s | 95.45%      |
    | after_setup_theme        | 0.0049s | 96%         |
    | init                     | 0.1428s | 76.74%      |
    | wp_loaded:after          | 0.0236s |             |
    +--------------------------+---------+-------------+
    | total (8)                | 0.4837s | 67.71%      |
    +--------------------------+---------+-------------+


