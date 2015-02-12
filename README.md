linux_performance_analysis
==========================

This is a subset of tools and dashboards for Linux Performance Analysis for each kernel release. 

The idea of this project is to create a public web page where all patches of the linux kernel next branch ( still not merged on the linux kernel ) could be tested with some basic perfomance tools.

How these patches are going to be tested ?
Basically using some existing Open Source performance tools (as LMbench, Unixbench, IOzone, others), that help us to validate if such patches improve the performance or at least doesn't decrease it, running specifict tasks which are the most commont un GNU / Linux based systems.

As a second stage, once that we have applied the patch, executed the tools, what happend if we found an issue? where to start?, to have a generic idea about where we can start, (depending on the Kernel component where we found the issue), we can take the following chart as an example:

Basic set of tools (http://www.brendangregg.com/linuxperf.html): 

This page links to various Linux performance material I've created, including the tools maps on the right. These show: Linux observability tools, Linux benchmarking tools, Linux tuning tools, and Linux sar. For more diagrams, see my slide decks below.
Tools

    perf_events: perf one-liners, examples, visualizations.
    perf-tools: perf analysis tools using perf_events and ftrace (github).
    ktap: one-liners, examples, and scripts.
    Flame Graphs: using perf, SystemTap, and ktap.


The linux next tree can be reach (https://www.kernel.org/doc/man-pages/linux-next.html):

