var $ = jQuery,
	isp_general = {

		/**
		 * params
		 */
		params : {

			window_width			: 0,		// client window width - used to maintain window resize events (int)
			breakpoint				: '',		// CSS media query breakpoint (int)
			prev_breakpoint			: '',		// Previous media query breakpoint (int)
			timeout					: 400		// general timeout (int)

		},

		/**
		 * init
		 *
		 * @param	N/A
		 * @return	N/A
		 */
		init : function() {

			// jQuery extentions
			$.fn.setAllToMaxHeight = function() {
				return this.height( Math.max.apply(this, $.map(this, function(e) { return $(e).height() })) );
			}

			// mobile menu
			isp_general.mobile_menu();

		},

		/**
		 * mobile_menu
		 *
		 * This function toggles sub menu items
		 * Called from init
		 *
		 * @param	N/A
		 * @return	N/A
		 */
		mobile_menu : function() {

			// vars
			var menu_parents_links = $('.mobile-menu .menu-item-has-children > a');

			menu_parents_links.each(function() {

				var menu_item = $(this);

				menu_item.on('click', function(event) {
					event.preventDefault();
					menu_item.parent().toggleClass('visible');
				});

			});

		},

		/**
		 * breakpoint_refreshValue
		 *
		 * Set window breakpoint values
		 * Called from loaded/alignments
		 *
		 * @param	N/A
		 * @return	N/A
		 */
		breakpoint_refreshValue : function () {

			var new_breakpoint = window.getComputedStyle(
				document.querySelector('body'), ':before'
			).getPropertyValue('content').replace(/\"/g, '').replace(/\'/g, '');

			isp_general.params.prev_breakpoint = isp_general.params.breakpoint;
			isp_general.params.breakpoint = new_breakpoint;

		},

		/**
		 * loaded
		 *
		 * Called by $(window).load event
		 *
		 * @param	N/A
		 * @return	N/A
		 */
		loaded : function() {

			isp_general.params.window_width = $(window).width();
			$(window).resize(function() {
				if ( isp_general.params.window_width != $(window).width() ) {
					isp_general.alignments();
					isp_general.params.window_width = $(window).width();
				}
			});

			isp_general.alignments();

		},

		/**
		 * alignments
		 *
		 * Align components after window resize event
		 *
		 * @param	N/A
		 * @return	N/A
		 */
		alignments : function() {

			// set window breakpoint values
			isp_general.breakpoint_refreshValue();

		}

	};

// make it safe to use console.log always
(function(a){function b(){}for(var c="assert,count,debug,dir,dirxml,error,exception,group,groupCollapsed,groupEnd,info,log,markTimeline,profile,profileEnd,time,timeEnd,trace,warn".split(","),d;!!(d=c.pop());){a[d]=a[d]||b;}})
(function(){try{console.log();return window.console;}catch(a){return (window.console={});}}());

$(isp_general.init);
$(window).load(isp_general.loaded);